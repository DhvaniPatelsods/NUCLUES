<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manage_complience_information extends Model
{
    use HasFactory;

    protected $table = 'manage_complience_informations';

    protected $fillable = [
       'frequency',
            'entity_type',
            'entity_id',
            'country_compliance_id',

            'client_entity_name',
            'complaince_name',
             'periodend',
              'form',
              'notes',
            'status',
            'group_name',
            'extended_date',
            'complation_date',
            'completion_delay',
            'attacment',
            'country',
            'mat_spv',
            'csd',
            'mat_manager',
            'created_by',
            'updated_by',
            'due_date',
    ];
}
