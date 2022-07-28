<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Customer;
use App\Models\Media;
use App\Models\Service;
use App\Models\SubCategory;

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

        // $transaction ->dd();
        // dd($customer);
        return view('Transaction.index', compact('transaction'));
    }

    public function filter(Request $request){
            $dari = $request->dari;
            $sampai = $request->sampai;

            $transaction = Transaction::whereDate('created_at' ,'>=', $dari)->whereDate('created_at','<=', $sampai)->orderBy('created_at','desc')->get();

            return view('Transaction.index', compact('transaction'));
    }

    public function simpanData(Request $request){
        /**
         * Get ID Customer
         */
        $idcustomer = Customer::find(1)
                    ->where('name', $request->customer);

        /**
         * Fetch request to data transaction
         */
        $transaction = new Transaction();

        $transaction->id_customer =$idcustomer;
        $transaction->id_media=$request->media;
        $transaction->id_service=$request->service;
        $transaction->purpose=$request->purpose;
        $transaction->data=$request->data;
        $transaction->id_sub_categories=$request->sub_categories;
        $transaction->save();

        return redirect('transaction')->with('status', 'Data Transaksi Berhasil Disimpan');
    }

    public function edit($id){

        $transaction = Transaction::find($id);
        $customer = Customer::all();
        $media= Media::all();
        $service= Service::all();

        return view('Transaction.editForm', compact('transaction','customer','media','service'));
    }

    public function update(Request $request,$id){

        $transaction=Transaction::with('Customer')->find($id);
        $transaction=Transaction::with('Media')->find($id);
        $transaction=Transaction::with('Service')->find($id);

        $transaction->id_customer=$request->customer;
        $transaction->id_media=$request->media;
        $transaction->id_service=$request->service;
        $transaction->purpose=$request->purpose;
        $transaction->data=$request->data;

        $transaction->save();

        return redirect()->route('transaction.index')->with('status', 'Data Transaksi Berhasil Diupdate');
    }

    public function show($id)
    {
        $transaction= Transaction::find($id);
        return view('Transaction.detailForm', compact('transaction'));
    }

    public function destroy($id){
        $transaction  = Transaction::find($id);
        $transaction ->delete();

        return redirect()->route('transaction.index')->with('status', 'Data Transaksi Berhasil Dihapus');
    }
}
