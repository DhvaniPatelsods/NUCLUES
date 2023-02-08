<?php

namespace App\Exports;

use App\Models\manage_complience_information;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithheadingRow;

class clientgroupreport implements FromCollection,WithheadingRow
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return manage_complience_information::where('status','1')->get();
    }
}
