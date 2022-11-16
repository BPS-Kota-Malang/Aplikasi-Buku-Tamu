<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Customer;
use App\Models\Media;
use App\Models\Service;
use App\Models\SubCategory;
use App\Models\Category;
use App\Models\Feedback;
use App\Models\Purpose;
use Illuminate\Support\Facades\Hash;
use App\Exports\TransactionExport;
use Excel;


class TransactionController extends Controller
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

        /**
         * Default Value for Feedback
         * $transaction->service=$request->feedback;
         * $transaction->facility=$request->feedback;
         * $transaction->dataqualities=$request->feedback;
         *
         */

        // $service = "";
        // $facility = "";
        // $data = "";


        $transaction = Transaction::with('Feedback')->get();
        // dd($transaction);

        // $data = [
        //     'id' => $transaction->id,
        //     ''
        // ];
        // $data->id = $transaction->id;

        // dd($data);
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

        $transaction->id_customer = $idcustomer;
        $transaction->id_media=$request->media;
        $transaction->id_service=$request->service;
        $transaction->purpose=$request->purpose;
        $transaction->data=$request->data;
        $transaction->id_sub_categories=$request->sub_categories;
        $transaction->id_categories=$request->categories;
        // $transaction->service=$request->feedback;
        // $transaction->facility=$request->feedback;
        // $transaction->dataqualities=$request->feedback;
        $transaction->save();

        return redirect('transaction')->with('status', 'Data Transaksi Berhasil Disimpan');
    }

    public function edit($id){

        $transaction = Transaction::find($id);
        $customer = Customer::all();
        $media= Media::all();
        $service= Service::all();
        $sub_categories= SubCategory::all();
        $purpose= Purpose::all();
        $categories= Category::all();
        $feedback= Feedback::all();

        return view('Transaction.editForm', compact('transaction','customer','media','service','sub_categories','purpose','categories','feedback'));
    }

    public function update(Request $request,$id){

        $transaction=Transaction::with('Customer')->find($id);
        $transaction=Transaction::with('Media')->find($id);
        $transaction=Transaction::with('Service')->find($id);
        $transaction=Transaction::with('SubCategory')->find($id);
        $transaction=Transaction::with('Purpose')->find($id);

        $transaction->id_customer=$request->customer;
        $transaction->id_media=$request->media;
        $transaction->id_service=$request->service;
        $transaction->id_purpose=$request->purpose;
        $transaction->data=$request->data;
        $transaction->id_sub_categories=$request->sub_categories;

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

    public function exportIntoExcelTransaction(){
        return Excel::download(new TransactionExport, 'transaction.xlsx');
    }

    public function exportIntoCSVTransaction(){
        return Excel::download(new TransactionExport, 'transaction.csv');
    }

    public function changeStatus($id){
        $getStatus = Transaction::select('status')->where('id',$id)->first()  ;
        if($getStatus->status==1){
            $status = 0;
        }else{
            $status = 1;
        }
        Transaction::where('id',$id)->update(['status'=>$status]);
        return redirect()->route('transaction.index')->with('status', 'Status berhasil diubah');
        return $getStatus;
    }
}
