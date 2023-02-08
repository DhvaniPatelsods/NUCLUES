<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entitytype extends Model
{
    use HasFactory;

    protected $table = 'entitytypes';

    protected $fillable = [
        'type',
    ];
}
