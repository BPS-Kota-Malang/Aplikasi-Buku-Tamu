<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaction = Transaction::all();
        return view('transaction.index', compact('transaction'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaction = Transaction::all();
        return view('Transaction.detailForm', compact('transaction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaction = Transaction::all();
        return view('Transaction.editForm', compact('transaction'));
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
        $transaction = Transaction::find($id);
        $transaction->id_customer=$request->customer;
        $transaction->id_media=$request->id_media;
        $transaction->id_service=$request->id_service;
        $transaction->tujuan=$request->tujuan;
        $transaction->data=$request->data;
        $transaction->id_social_population=$request->id_social_population;
        $transaction->id_economy_trade=$request->id_economy_trade;
        $transaction->id_agriculture_mining=$request->id_agriculture_mining;

        $transaction->save();

        return redirect()->route('transaction.index')->with('status', 'Data Transaksi Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaction= Transaction::find($id);
        $transaction->delete();

        return redirect()->route('transaction.index')->with('status', 'Data Transaksi Berhasil Dihapus');
    }
}
