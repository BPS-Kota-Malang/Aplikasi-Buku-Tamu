<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Job;
use App\Models\Education;
use App\Models\Media;
use App\Models\Service;
use App\Models\SubCategory;
use App\Models\Purpose;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;
use App\Models\Transaction;
use Alert;


class GuestController extends Controller
{
    public function formTamu() {
        $job = Job::all();
        $education = Education::all();
        $media = Media::all();
        $service = Service::all();
        $purpose = Purpose::all();
        $sub_categories = SubCategory::all();
        $categories = Category::all();

        return view('/index', compact('job','education','media','service','sub_categories','categories','purpose'));
        return dd(Session::all());
        // $purpose = Purpose::all();

        // return view('/index', compact('job','education','media','service','sub_categories','purpose'));

    }

    public function saveGuest(Request $request){

        // $this->validate($request,[
        //     'hp' => 'required|min:10',
        //     'name' => 'required|min:5',
        //     'email' => 'required|email|max:255|unique:users',
        //     'address' => 'required|min:5',
        //     'age' => 'required|min:1|max:2',
        //     'institute' => 'required|min:10',
        //     'nipnim' => 'required|min:9',
        //     'purpose' => 'required|min:8',
        //     'data' => 'required|min:5',

        // ]);
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
        $purpose = $request->purpose;
        $sub_categories =$request->sub_categories;

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


       /**
         * Get ID Customer
         */
        $idcustomer = Customer::where('name', $name)
                    ->value('id');
        /**
         * Fetch request to data transaction
         */

        // $sub_categories = $request->sub_categories;

        $transaction = new Transaction();
        $transaction->id_customer =$idcustomer;
        $transaction->id_media=$request->media;
        $transaction->id_service=$request->service;
        $transaction->id_purpose=$request->purpose;
        $transaction->data=$request->data;
        $transaction->id_sub_categories=$request->sub_categories;
        $transaction->save();

        Alert::success("Success", "Terimakasih  $name  Sudah menggunakan layanan kami");
        return redirect('/pelanggan');

    }

    public function cekcustomer(Request $request){
        $customer = Customer::where('hp', $request->hp)
                                -> get();

        return $customer;
    }
}
