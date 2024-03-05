<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $guarded = [];
    protected $dates=['create_at'];
    protected $fillable=[ 'nama', 'jeniskelamin', 'notelpon', 'foto'];
   
}
