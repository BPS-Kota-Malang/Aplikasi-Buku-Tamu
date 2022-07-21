<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Job;
use App\Models\Education;
use App\Models\Media;
use App\Models\SocialPopulation;
use App\Models\EconomyTrade;
use App\Models\AgricultureMining;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GuestController extends Controller
{
    public function index() {     
        $data = Customer::all();
        $job = Job::all();
        $education= Education::all();
        $media = Media::all();
        $needs1 = SocialPopulation::all();
        $needs2 = EconomyTrade::all();
        $needs3 = AgricultureMining::all();
        $type = Service::all();
        return view('Admin.Tamu.index', compact('data','job','education','media','needs1','needs2','needs3','type'));
    }

    public function addForm() {
        $job = Job::all();
        return view('Admin.Tamu.addForm', compact('job'));
    }

    public function saveData(Request $request){
        $customer = new Customer();

        $customer ->name=$request->name;
        $customer ->hp=$request->hp;
        $customer ->email=$request->email;
        $customer ->address=$request->address;
        $customer ->id_job=$request->job;
        
        $customer ->save();

        return redirect('admin/tamu')->with('status', 'Data Tamu Berhasil Disimpan');
    }

    public function formEdit($id){
        $data = Customer::find($id);
        $job = Job::all();
        return view('Admin.Tamu.formEdit', compact('data','job'));
    }

    public function updateTamu(Request $request,$id){
        $data=Customer::with('guestJob')->find($id);
        $data->name=$request->name;
        $data->hp=$request->hp;
        $data->address=$request->address;
        $data->email=$request->email;
        $data->id_job=$request->job;
        $data->save();

        return redirect('admin/tamu')->with('status', 'Data Tamu Berhasil Diupdate');
    }

    public function show($id)
    {
        $data = Customer ::find($id);
        return view('Admin.Tamu.formDetail', compact('data'));     
    }

    public function deleteTamu(Request $request){
        $id = $request->id;
        $data = Customer::find($id);
        $data->delete();
        return redirect('admin/tamu')->with('status', 'Data Tamu Berhasil Dihapus');
    }

    public function register(Request $request){
        $user = new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->save();

        return redirect('/login');

    }
}