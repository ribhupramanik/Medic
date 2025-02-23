<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tests extends Model
{
    use HasFactory;
    protected $table = 'tests';
    protected $fillable = ['name', 'Day', 'time_from','time_to', 'Fees', 'Requirements'];  
}
