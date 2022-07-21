<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Education;
use App\Models\Job;
use App\Models\Media;
use App\Models\SocialPopulation;
use App\Models\EconomyTrade;
use App\Models\AgricultureMining;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function index() {     
        $customer = Customer::all();
        $education = Education::all();
        $job = Job::all();
        return view('Admin.Tamu.index', compact('customer','education','job'));
    }

    public function formTambah() {
        $customer = Customer::all();
        $education = Education::all();
        $job = Job::all();
        return view('Admin.Tamu.addForm', compact('customer','education','job'));
    }

    public function simpanData(Request $request){
        $customer = new Customer();

        $customer->name=$request->name;
        $customer->hp=$request->hp;
        $customer->gender=$request->gender;
        $customer->email=$request->email;
        $customer->age=$request->age;
        $customer->nipnim=$request->nipnim;
        $customer->institute=$request->institute;
        $customer->address=$request->address;
        $customer->id_job=$request->job;
        $customer->id_education=$request->education;

        $customer->save();

        return redirect('admin/tamu')->with('status', 'Data Tamu Berhasil Disimpan');
    }

    public function formEdit($id){
        $customer = Customer::find($id);
        $education = Education::all();
        $job = Job::all();
        return view('Admin.Tamu.editForm', compact('customer','education','job'));
    }

    public function updateTamu(Request $request,$id){
        $customer=Customer::with('guestEducation')->find($id);
        $customer=Customer::with('guestJob')->find($id);

        $customer->name=$request->name;
        $customer->hp=$request->hp;
        $customer->gender=$request->gender;
        $customer->email=$request->email;
        $customer->age=$request->age;
        $customer->nipnim=$request->nipnim;
        $customer->institute=$request->institute;
        $customer->address=$request->address;
        $customer->id_job=$request->job;
        $customer->id_education=$request->education;

        $customer->save();

        return redirect('admin/tamu')->with('status', 'Data Tamu Berhasil Diupdate');
    }

    public function show($id)
    {
        $customer = Customer::find($id);
        return view('Admin.Tamu.detailForm', compact('customer'));     
    }

    public function hapusTamu(Request $request){
        $id = $request->id;
        $customer = Customer::find($id);
        $customer->delete();
        return redirect('admin/tamu')->with('status', 'Data Tamu Berhasil Dihapus');
    }

}