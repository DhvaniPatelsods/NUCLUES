<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BackupRestore extends Model
{
    use HasFactory;
     
    protected $fillable = [


    'client_group',
    'entity_name',
    'job_title',
    'date',
    'time',
    'restored_by', 
    'status',
    ];

    public function users(){

        return $this->belongsTo(User::class, 'restored_by', 'id');
        
    }

    public function groups(){

        return $this->belongsTo(client_group_master::class, 'client_group', 'id');
        
    }

}





       



