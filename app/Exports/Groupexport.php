<?php

namespace App\Exports;

use App\Models\client_group_master;
use Maatwebsite\Excel\Concerns\FromCollection;

class Groupexport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return client_group_master::all();
    }
}
