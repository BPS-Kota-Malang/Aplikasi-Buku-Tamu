<?php

namespace App\Exports;

use App\Models\Transaction;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TransactionExport implements FromCollection,WithHeadings
{
    public function headings():array{
        return[
            'customer',
            'media',
            'service',
            'purpose',
            'sub_categories'
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect(Transaction::getTransaction());
    }
}
