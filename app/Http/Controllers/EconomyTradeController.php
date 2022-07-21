<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EconomyTrade;

class EconomyTradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ecotra = EconomyTrade::all();
        return view('Economy_trade.index', compact('ecotra'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ecotra = EconomyTrade::all();
        return view('Economy_trade.addForm', compact('ecotra'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ecotra = new EconomyTrade();

        $ecotra->ecotra_type=$request->type;
        $ecotra->save();

        return redirect()->route('ecotra.index')->with('status', 'Data Jenis Ekonomi dan Perdagangan Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ecotra = EconomyTrade::find($id);
        return view('Economy_trade.detailForm', compact('ecotra'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ecotra = EconomyTrade::find($id);
        return view('Economy_trade.editForm', compact('ecotra'));
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
        $ecotra = EconomyTrade::find($id);
        $ecotra->ecotra_type=$request->type;
        $ecotra->save();

        return redirect()->route('ecotra.index')->with('status', 'Data Jenis Ekonomi dan Perdagangan Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ecotra = EconomyTrade::find($id);
        $ecotra->delete();

        return redirect()->route('ecotra.index')->with('status', 'Data Jenis Ekonomi dan Perdagangan Berhasil Dihapus');
    }
}
