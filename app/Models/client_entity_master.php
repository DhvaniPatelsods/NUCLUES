<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client_entity_master extends Model
{
    use HasFactory;
     
    protected $table = 'client_entity_masters';

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
        'created',
        'updated',
        'affilate_name2',
        'affilate_email2',
        'affilate_phone2',
        'responsibility',
    ];
}
