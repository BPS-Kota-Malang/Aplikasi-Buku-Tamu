<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;

class GuestController extends Controller
{
    public function formTamu() {
        $job = Job::all();
        return view('/index', compact('job'));
    }

    public function saveGuest(Request $request){
        $name   = $request->name;
        $hp = $request->hp;
        $email   = $request->email;
        $address = $request->address;
        $job  = $request->job;

        $data = new Customer();
        $data->name = $name;
        $data->hp = $hp;
        $data->email = $email;
        $data->address = $address;
        $data->id_job = $job;
        $data->save();

        return redirect('/')->with('status', 'Data Tamu Berhasil Disimpan');

    }
}
