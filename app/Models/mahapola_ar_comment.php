<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahapola_ar_comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'mahapola_ar_comment',
        'status_id',
    ];
}
