<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Education;
use App\Models\Service;
use App\Models\Transaction;
use App\Models\Media;
use App\Models\Purpose;

class DashboardController extends Controller
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
        $customer = Customer::count();
        $asn = Customer::where('id_job', '=', 2)->count();
        $student= Customer::where('id_job', '=', 3)->count();
        $lecturer = Customer::where('id_job', '=', 4)->count();

        $education = Education::count();
        $smp = Customer::where('id_education', '=', 2)->count();
        $sma = Customer::where('id_education', '=', 3)->count();
        $diploma = Customer::where('id_education', '=', 4)->count();
        $sarjana = Customer::where('id_education', '=', 5)->count();
        $magister = Customer::where('id_education', '=', 6)->count();
        $doktor = Customer::where('id_education', '=', 7)->count();

        $service = Transaction::count();
        $service1 = Transaction::where('id_service', '=', 4)->count();
        $service2 = Transaction::where('id_service', '=', 5)->count();
        $service3 = Transaction::where('id_service', '=', 6)->count();

        $media = Media::count();
        $media1 = Transaction::where('id_media', '=', 2)->count();
        $media2 = Transaction::where('id_media', '=', 3)->count();
        $media3 = Transaction::where('id_media', '=', 4)->count();
        $media4 = Transaction::where('id_media', '=', 5)->count();
        $media5 = Transaction::where('id_media', '=', 6)->count();

        $purpose = Purpose::count();
        $purpose1 = Transaction::where('id_purpose', '=', 2)->count();
        $purpose2 = Transaction::where('id_purpose', '=', 3)->count();
        $purpose3 = Transaction::where('id_purpose', '=', 4)->count();
        $purpose4 = Transaction::where('id_purpose', '=', 5)->count();
        $purpose5 = Transaction::where('id_purpose', '=', 6)->count();
        
        return view('dashboard', compact('customer','asn','student','lecturer','education','smp','sma','diploma','sarjana','magister','doktor','service','service1','service2','service3','media','media1','media2','media3','media4','media5','purpose','purpose1','purpose2','purpose3','purpose4','purpose5'));
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
