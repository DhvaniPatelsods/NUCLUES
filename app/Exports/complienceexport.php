<?php

namespace App\Exports;

use App\Models\country_compliance__master;
use Maatwebsite\Excel\Concerns\FromCollection;

class complienceexport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return country_compliance__master::all();
    }
}
