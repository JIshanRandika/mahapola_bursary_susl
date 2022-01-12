<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahapola_status extends Model
{
    use HasFactory;

    protected $fillable = [
        'batch',
        'faculty',
        'installment_name',
        'mahalpola_description',
        'status',
        'level',
    ];


}
