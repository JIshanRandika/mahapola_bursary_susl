<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bursary_ar_comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'bursary_ar_comment',
        'status_id',
    ];

}
