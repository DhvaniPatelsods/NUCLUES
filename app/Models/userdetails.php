<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userdetails extends Model
{
    use HasFactory;
    protected $table = 'userdetails';

    protected $fillable = [
        'user_id',
            'country',
            'phone',
            'role',
    ];
}
