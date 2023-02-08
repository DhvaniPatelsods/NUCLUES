<?php

namespace App\Imports;

use App\Models\client_entity_master;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithheadingRow;
class entityimport implements ToModel,WithheadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new client_entity_master([
            'client_group' => $row['client_group'],
            'client_entity_name' => $row['client_entity_name'],
            'country' => $row['country'],
            'entity_type' => $row['entity_type'],
            'year_end' => $row['year_end'],
            'date' => $row['date'],
            'company_rg_no' => $row['company_rg_no'],
            'tax_rg_no' => $row['tax_rg_no'],
            'gst_no' => $row['gst_no'],
            'withholding_tax_rg_no' => $row['withholding_tax_rg_no'],
            'social_security_no' => $row['social_security_no'],
            'anyother_no' => $row['anyother_no'],
            'csd' => $row['csd'],
            'mat_manager' => $row['mat_manager'],
            'mat_spv' => $row['mat_spv'],
            'affiliate_name' => $row['affiliate_name'],
            'affiliate_email' => $row['affiliate_email'],
            'affiliate_phone' => $row['affiliate_phone'],
            'other_user' => $row['other_user'],
            'scope_work' => $row['scope_work'],
            'created' => $row['created'],
        ]);
    }
}
