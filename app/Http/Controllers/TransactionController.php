<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Customer;
use App\Models\Media;
use App\Models\Service;
use App\Models\SocialPopulation;
use App\Models\EconomyTrade;
use App\Models\AgricultureMining;

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
        $customer = Customer::all();
        $media= Media::all();
        $service= Service::all();
        $social_population= SocialPopulation::all();
        $economy_trade= EconomyTrade::all();
        $agriculture_mining= AgricultureMining::all();
        return view('Transaction.index', compact('transaction','customer','media','service','social_population','economy_trade','agriculture_mining'));
    }

    public function simpanData(Request $request){
        // $transaction = new Transaction();

        // $transaction->id_customer=$request->customer;
        // $transaction->id_media=$request->media;
        // $transaction->id_service=$request->service;
        // $transaction->purpose=$request->purpose;
        // $transaction->data=$request->data;
        // $transaction->id_social_population=$request->social_population;
        // $transaction->id_economy_trade=$request->economy_trade;
        // $transaction->id_agriculture_mining=$request->agriculture_mining;



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
        $transaction->id_social_population=$request->social_population;
        $transaction->id_economy_trade=$request->economy_trade;
        $transaction->id_agriculture_mining=$request->agriculture_mining;
        $transaction->save();

        return redirect('transaction')->with('status', 'Data Tamu Berhasil Disimpan');
    }

     public function formEdit($id){

        $transaction = Transaction::find($id);
        $customer = Customer::all();
        $media= Media::all();
        $service= Service::all();
        $social_population= SocialPopulation::all();
        $economy_trade= EconomyTrade::all();
        $agriculture_mining= AgricultureMining::all();
        return view('Transacation.editForm', compact('transaction','customer','media','service','social_population','economy_trade','agriculture_mining'));
    }

    public function updateTransaksi(Request $request,$id){

        $transaction=Transaction::with('guestCustomer')->find($id);
        $transaction=Transaction::with('guestMedia')->find($id);
        $transaction=Transaction::with('guestService')->find($id);
        $transaction=Transaction::with('guestSocialPopulation')->find($id);
        $transaction=Transaction::with('guestEconomyTrade')->find($id);
        $transaction=Transaction::with('guestAgricultureMining')->find($id);

        $transaction->id_customer=$request->customer;
        $transaction->id_media=$request->media;
        $transaction->id_service=$request->service;
        $transaction->purpose=$request->purpose;
        $transaction->data=$request->data;
        $transaction->id_social_population=$request->social_population;
        $transaction->id_economy_trade=$request->economy_trade;
        $transaction->id_agriculture_mining=$request->agriculture_mining;

        $transaction->save();

        return redirect('transaction.index')->with('status', 'Data Tamu Berhasil Diupdate');
    }

    public function show($id)
    {
        $transaction= Transaction::find($id);
        return view('Transaction.detailForm', compact('transaction'));
    }

    public function hapusTransaksi(Request $request){
        $id = $request->id;
        $transaction = Transaction::find($id);
        $transaction->delete();
        return redirect('transaction.index')->with('status', 'Data Tamu Berhasil Dihapus');
    }

    // public function saveTransaction(Request $request){
    //     $customer = $request->customer;
    //     $media = $request->media;
    //     $service   = $request->service;
    //     $purpose = $request->purpose;
    //     $data = $request->data;
    //     $social_population= $request->social_population;
    //     $economy_trade = $request->economy_trade;
    //     $agriculture_mining= $request->agriculture_mining;

    //     $data = new Transaction();
    //     $data->id_customer = $customer;
    //     $data->id_media = $media;
    //     $data->id_service = $service;
    //     $data->purpose = $purpose;
    //     $data->data =  $data;
    //     $data->id_social_population = $social_population;
    //     $data->id_economy_trade = $economy_trade;
    //     $data->id_agriculture_mining = $agriculture_mining;
    //     $data->save();

    //     return redirect('transaction.index')->with('status', 'Data Tamu Berhasil Disimpan');

    // }
}
