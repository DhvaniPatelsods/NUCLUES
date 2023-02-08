<?php

namespace App\Exports;

use App\Models\client_entity_master;
use Maatwebsite\Excel\Concerns\FromCollection;

class entityexport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return client_entity_master::all();
    }
}
