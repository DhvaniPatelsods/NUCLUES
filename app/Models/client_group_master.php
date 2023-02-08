<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client_group_master extends Model
{
    use HasFactory;

    protected $table = 'client_group_masters';

    protected $fillable = [
        'client_group',
            'contect_person',
            'contect_phone',
            'designation',
            'email',
            'created',
        'updated',
        'person2',
        'phone2',
        'designation2',
        'email2',
        'responsibility',
        'responsibility2',
        'status',
    ];
}
