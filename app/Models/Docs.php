<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docs extends Model
{
    use HasFactory;
    protected $table = 'docs';

     protected $fillable = [
        'type','doc_no','doc_date','from','to','subject','hamish',
        'importance','also_send_to','exp_imp_no','exp_imp_date','attach','notes',
        'created_by','is_updated','updated_by','is_deleted','deleted_by','created_at',
        'updated_at'
    ];
 
}
