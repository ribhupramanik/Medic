<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor_Timings extends Model
{
    use HasFactory;

    protected $table = 'doctor_timings';
    protected $fillable = [
        'doctor_name',
        'timing',
        'day',
    ];
}
