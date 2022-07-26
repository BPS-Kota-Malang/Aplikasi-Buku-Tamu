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
        $hp = new Customer();
        $hp->hp=$request->hp;
        $hp->save();

        return redirect()->route('feedback.in')->with('status', 'Data  Pelayanan Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaction= Transaction::find($id);
        return view('Transaction.detailForm', compact('transaction'));
    }

    public function formFeedback() {
        $feedback = Feedback::all();
        $customer = Customer::all();
        $transaction = Transaction::all();
        return view('in', compact('feedback' , 'customer', 'transaction'));
    }

    public function saveFeedback(Request $request)
    {
        $service = $request->service;
        $facility = $request->facility;
        $dataqualities = $request->dataqualities;
        
        // $customer->hp=$request->hp;

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
