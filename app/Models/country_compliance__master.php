<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class country_compliance__master extends Model
{
    use HasFactory;
    protected $table = 'country_compliance__masters';

    protected $fillable = [
        'country',
        'entity_type',
        'forms',
        'Frequency',
        'periodend',
        'complaince_name',
        'notes',
        'created',
        'updated',
        'status',
    ];

    
}
