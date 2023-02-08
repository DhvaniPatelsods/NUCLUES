<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activity extends Model
{
    use HasFactory;
    protected $table = 'activities';

    protected $fillable = [
         'client_group',
            'client_entity_name',
            'country',
            'entity_type',
            'year_end',
            'status',
            'date',
            'company_rg_no',
            'tax_rg_no',
            'gst_no',
            'withholding_tax_rg_no',
            'social_security_no',
            'anyother_no',
            'csd',
            'mat_manager',
            'mat_spv',
            'affiliate_name',
            'affiliate_email',
            'affiliate_phone',
            'other_user',
            'scope_work',
            'contect_person',
            'contect_phone',
            'designation',
            'email',
            'forms',
            'Frequency',
            'periodend',
            'complaince_name',
            'notes',
            'role',
            'created',
            'updated',
            'activity',
            'time',
    ];
}
