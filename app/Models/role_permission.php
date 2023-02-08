<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role_permission extends Model
{
    use HasFactory;
    protected $table = 'role_permission';

    protected $fillable = [
       'role_id',
       'module_id',
       'status',
       'permission',
       'create',
       'read',
       'update',
       'delete',
    ];

    public function modules(){

        return $this->belongsTo(module::class, 'module_id' , 'id');
    }
}
