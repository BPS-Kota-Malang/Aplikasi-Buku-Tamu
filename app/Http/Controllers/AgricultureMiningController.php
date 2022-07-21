<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AgricultureMining;

class AgricultureMiningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agrimin = AgricultureMining::all();
        return view('Agriculture_mining.index', compact('agrimin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agrimin = AgricultureMining::all();
        return view('Agriculture_mining.addForm', compact('agrimin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $agrimin = new AgricultureMining();

        $agrimin->agrimin_type=$request->type;
        $agrimin->save();

        return redirect()->route('agrimin.index')->with('status', 'Data Jenis Ekonomi dan Perdagangan Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $agrimin = AgricultureMining::find($id);
        return view('Agriculture_mining.detailForm', compact('agrimin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agrimin = AgricultureMining::find($id);
        return view('Agriculture_mining.editForm', compact('agrimin'));
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
        $agrimin = AgricultureMining::find($id);
        $agrimin->agrimin_type=$request->type;
        $agrimin->save();

        return redirect()->route('agrimin.index')->with('status', 'Data Jenis Ekonomi dan Perdagangan Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agrimin = AgricultureMining::find($id);
        $agrimin->delete();

        return redirect()->route('agrimin.index')->with('status', 'Data Jenis Ekonomi dan Perdagangan Berhasil Dihapus');
    }
}
