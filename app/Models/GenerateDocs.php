<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenerateDocs extends Model
{
    use HasFactory;
    protected $table = 'GenerateDocs';

    protected $fillable = [
        'doc_no','doc_title','doc_date','doc_for','signer_name','qr_code','doc_body','created_at',
        'updated_at'
    ];

}
