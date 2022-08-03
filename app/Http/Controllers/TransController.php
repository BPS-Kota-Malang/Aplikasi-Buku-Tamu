<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use PDF;

class TransController extends Controller
{
    public function getAllTransaction(){
        $transaction = Transaction::all();
        return view('transaction',compact('transaction'));
    }

    public function downloadPDFTransaction() {
        $transaction = Transaction::all();
        $pdf = PDF::loadView('transaction',compact('transaction'));
        return $pdf->stream('transaction.pdf');
    }

}
