<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
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
}
