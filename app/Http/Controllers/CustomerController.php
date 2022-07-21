<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Job;
use App\Models\Education;
use App\Models\Media;
use App\Models\SocialPopulation;
use App\Models\EconomyTrade;
use App\Models\AgricultureMining;
use App\Models\Service;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $job= Job::all();
        $education = Education::all();
        $media = Media::all();
        $needs1 = SocialPopulation::all();
        $needs2 = EconomyTrade::all();
        $needs3 = AgricultureMining::all();
        $service = Service::all();
        return view('/index', compact('job','education','media','needs1','needs2','needs3','service'));
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
        $customer = new Customer();

        $customer->name=$request->name;
        $customer->hp=$request->hp;
        $customer->gender=$request->gender;
        $customer->email=$request->email;
        $customer->age=$request->age;
        $customer->institute=$request->institute;
        $customer->nipnim=$request->nipnim;
        $customer->address=$request->address;
        $customer->id_job=$request->job;
        $customer->id_education=$request->education;
        $customer->id_media=$request->media;
        $customer->id_needs=$request->needs;
        $customer->id_service=$request->service;
        $customer->purpose=$request->purpose;
        $customer->data=$request->data;
        
        $customer->save();

        return redirect('/')->with('status', 'Data Tamu Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
