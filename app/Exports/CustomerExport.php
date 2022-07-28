<?php

namespace App\Exports;

use App\Models\Customer;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CustomerExport implements FromCollection,WithHeadings
{
    public function headings():array{
        return[
            'name',
            'hp',
            'gender',
            'education',
            'job'
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect(Customer::getCustomer());
    }
}
