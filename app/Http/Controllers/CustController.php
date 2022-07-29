<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Education;
use App\Models\Job;
use PDF;

class CustController extends Controller
{
    public function getAllCustomer(){
        $pelanggan = Customer::all();
        return view('customer',compact('pelanggan'));
    }

    public function downloadPDF() {
        $pelanggan = Customer::all();
        $pdf = PDF::loadView('customer',compact('pelanggan'));
        return $pdf->download('customer.pdf');
    }

    public function getAllReport(){
        $pelanggan = Customer::all();
        $job = Job::all();
        $customer = Customer::count();
        $asn = Customer::where('id_job', '=', 2)->count();
        $student= Customer::where('id_job', '=', 3)->count();
        $lecturer = Customer::where('id_job', '=', 4)->count();

        $pendidikan = Education::all(); 
        $education = Education::count();
        $smp = Customer::where('id_education', '=', 2)->count();
        $sma = Customer::where('id_education', '=', 3)->count();
        $diploma = Customer::where('id_education', '=', 4)->count();
        $sarjana = Customer::where('id_education', '=', 5)->count();
        $magister = Customer::where('id_education', '=', 6)->count();
        $doktor = Customer::where('id_education', '=', 7)->count();
        return view('report',compact('pelanggan','job','customer','asn','student','lecturer','pendidikan','education','smp','sma','diploma','sarjana','magister','doktor'));
    }

    public function downloadPDFReport() {
        $pelanggan = Customer::all();
        $job = Job::all();
        $customer = Customer::count();
        $asn = Customer::where('id_job', '=', 2)->count();
        $student= Customer::where('id_job', '=', 3)->count();
        $lecturer = Customer::where('id_job', '=', 4)->count();

        $pendidikan = Education::all(); 
        $education = Education::count();
        $smp = Customer::where('id_education', '=', 2)->count();
        $sma = Customer::where('id_education', '=', 3)->count();
        $diploma = Customer::where('id_education', '=', 4)->count();
        $sarjana = Customer::where('id_education', '=', 5)->count();
        $magister = Customer::where('id_education', '=', 6)->count();
        $doktor = Customer::where('id_education', '=', 7)->count();
        $pdf = PDF::loadView('report',compact('pelanggan','job','customer','asn','student','lecturer','pendidikan','education','smp','sma','diploma','sarjana','magister','doktor'));
        return $pdf->download('report.pdf');
    }

}
