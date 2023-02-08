<?php

namespace App\Imports;

use App\Models\client_group_master;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithheadingRow;
use Auth;
use Illuminate\Support\Collection;

use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\Validator;
class Groupimport implements ToCollection,WithheadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {
        /**return new client_group_master([
             'client_group' => $row['client_group'],
            'contect_person' => $row['contect_person'],
            'contect_phone' => $row['contect_phone'],
            'designation' => $row['designation'],
            'email' => $row['email'],
            'created' => Auth::id(),
        ]);**/


        Validator::make($rows->toArray(), [

             '*.client_group' => 'required|unique:client_group_masters',

             '*.contect_person' => 'required',

             '*.contect_phone' => 'required',
             '*.designation' => 'required',
             '*.email' => 'required',

         ])->validate();

        foreach ($rows as $row) {

            client_group_master::create([

                'client_group' => $row['client_group'],
            'contect_person' => $row['contect_person'],
            'contect_phone' => $row['contect_phone'],
            'designation' => $row['designation'],
            'email' => $row['email'],
            'created' => Auth::id(),

            ]);
        }
    }
}
