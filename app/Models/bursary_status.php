<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bursary_status extends Model
{
    use HasFactory;

    protected $fillable = [
        'batch',
        'faculty',
        'installment_name',
        'bursary_description',
        'status',
        'level',
        'approved_by',
    ];
}
