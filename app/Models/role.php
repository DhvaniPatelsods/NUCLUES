<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory;
    protected $table = 'roles';

    protected $fillable = [
        'role',
        'status',
        'created',
        'updated',
    ];

    public function permissions(){

            return $this->belongsTo(role_permission::class, 'role_id', 'id');
        }
}
