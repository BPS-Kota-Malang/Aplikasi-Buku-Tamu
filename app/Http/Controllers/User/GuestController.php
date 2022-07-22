<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Job;
use App\Models\Education;
use App\Models\Media;
use App\Models\SocialPopulation;
use App\Models\EconomyTrade;
use App\Models\AgricultureMining;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;

class GuestController extends Controller
{
    public function formTamu() {
        $job = Job::all();
        $education = Education::all();
        $media = Media::all();
        $needs1 = SocialPopulation::all();
        $needs2 = EconomyTrade::all();
        $needs3 = AgricultureMining::all();
        $service = Service::all();
        return view('/index', compact('job','education','media','needs1','needs2','needs3','service'));
    }

    public function saveGuest(Request $request){
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

        return redirect('/')->with('status', 'Data Tamu Berhasil Disimpan');

    }
}
