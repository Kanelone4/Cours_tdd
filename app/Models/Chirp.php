<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chirp extends Model
{
    protected $fillable = [
        'message',
    ];
}
