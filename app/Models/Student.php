<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['nis', 'nama', 'tanggal_lahir', 'gender', 'alamat', 'email'];
}
