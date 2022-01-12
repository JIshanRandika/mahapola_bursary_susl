<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bursary_vc_or_reg_comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'bursary_vc_or_reg_comment',
        'status_id',
    ];
}
