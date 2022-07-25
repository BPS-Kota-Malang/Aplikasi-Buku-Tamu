<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Job;
use App\Models\Education;
use App\Models\Media;
use App\Models\Service;
use App\Models\SocialPopulation;
use App\Models\EconomyTrade;
use App\Models\AgricultureMining;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;
use App\Models\Transaction;
use App\Http\Controllers\Controllers\TransactionController;


class GuestController extends Controller
{
    public function formTamu() {
        $job = Job::all();
        $education = Education::all();
        $media = Media::all();
        $service = Service::all();
        $social_population = SocialPopulation::all();
        $economy_trade = EconomyTrade::all();
        $agriculture_mining= AgricultureMining::all();
        return view('/index', compact('job','education','media','service','social_population','economy_trade','agriculture_mining'));
    }

    public function saveGuest(Request $request){
        // dd ($request->all());

        // Tahap 1 - 2
        $name   = $request->name;
        $hp = $request->hp;
        $email   = $request->email;
        $address = $request->address;
        $job  = $request->job;
        $gender = $request->gender;
        $age = $request->age;
        $nipnim= $request->nipnim;
        $institute= $request->institute;
        $education = $request->education;

        $data = new Customer();
        $data->name = $name;
        $data->hp = $hp;
        $data->gender= $gender;
        $data->age= $age;
        $data->nipnim= $nipnim;
        $data->institute= $institute;
        $data->email = $email;
        $data->address = $address;
        $data->id_job = $job;
        $data->id_education = $education;

        $data->save();

    //    /**
    //      * Get ID Customer
    //      */
    //     $idcustomer = Customer::where('name', $name)
    //                 ->value('id');

    //     /**
    //      * Fetch request to data transaction
    //      */
    //     $transaction = new Transaction();
    //     $transaction->id_customer =$idcustomer;
    //     $transaction->id_media=$request->media;
    //     $transaction->id_service=$request->service;
    //     $transaction->purpose=$request->purpose;
    //     $transaction->data=$request->data;
    //     $transaction->id_social_population=$request->social_population;
    //     $transaction->id_economy_trade=$request->economy_trade;
    //     $transaction->id_agriculture_mining=$request->agriculture_mining;
    //     $transaction->save();
    //     $datat->id_agriculture_mining = $agriculture_mining;

        // $datat->save();

        // return redirect('/')->with('status', 'Data Tamu Berhasil Disimpan');

    }
}
