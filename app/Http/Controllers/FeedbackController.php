<?php

namespace App\Http\Controllers;
use App\Models\Feedback;
use App\Models\Customer;
use App\Models\Transaction;
use Illuminate\Http\Request;


class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('feedback.in');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }
    public function showTransaction(Request $request)
    {


        $customer_id = Customer::where('hp', $request->hp)
                                ->take(1)
                                // ->get();
                                ->value('id');


        $transaction = Transaction::where('id_customer', $customer_id)
                                    ->get();

        return view ('feedback.index', compact('transaction'));


    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd ($request->all());

        $feedback = new Feedback();

        $feedback->id_transaction=$request->transaction;
        $feedback->service = $request->service;
        $feedback->facility = $request->facility;
        $feedback -> dataqualities = $request->dataqualities;

        $feedback->save();

        return redirect()->route('feedback.index')->with('status', 'Data Feddback Berhasil Disimpan');

    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        $transaction= Transaction::find($id);
        return view('Transaction.detailForm', compact('transaction'));


        $feedback = new feedback;
        $feedback -> service = $request->service;
        $feedback -> facility = $request->facility;
        $feedback -> dataqualities = $request->dataqualities;
        $feedback -> id_transaction = $transaction;
        $feedback -> save();

        return redirect('feedback');


        dd($feedback);
    }

    public function formFeedback() {

        $customer = Customer::all();
        $transaction = Transaction::all();
        return view('in', compact( 'customer', 'transaction'));
    }

    public function saveFeedback(Request $request)
    {
        $service = $request->service;
        $facility = $request->facility;
        $dataqualities = $request->dataqualities;



        $idcustomer = Customer::find(1)
                    ->where('hp', $request->customer)
                    ->get();


        $transaction = new Transaction();
        $transaction->id_customer =$idcustomer;

        $data = new Feedback();
        $data->service= $service;
        $data->facility= $facility;
        $data->dataqualities= $dataqualities;

        $data->save();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
