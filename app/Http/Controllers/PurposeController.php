<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purpose;

class PurposeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purpose = Purpose::all();
        return view('Purpose.index', compact('purpose'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $purpose = Purpose::all();
        return view('Purpose.addForm', compact('purpose'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $purpose = new Purpose();

        // $purpose->purpose_type=$request->purpose;
        // $purpose->save();

        $validate =  $request->validate([
            'purpose_type' => 'required|string'
        ]);

        Purpose::create($validate);

        return redirect()->route('purpose.index')->with('status', 'Data Jenis Tujuan Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $purpose = Purpose::find($id);
        return view('Purpose.detailForm', compact('purpose'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $purpose = Purpose::find($id);
        return view('Purpose.editForm', compact('purpose'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $purpose = Purpose::find($id);
        // $purpose->purpose_type=$request->purpose;
        // $purpose->save();

        $purpose = Purpose::find($id);

        $validate =  $request->validate([
            'purpose_type' => 'required|string'
        ]);

        $purpose->update($validate);

        return redirect()->route('purpose.index')->with('status', 'Data Jenis Tujuan Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $purpose = Purpose::find($id);
        $purpose->delete();

        return redirect()->route('purpose.index')->with('status', 'Data Jenis Tujuan Berhasil Dihapus');
    }
}
