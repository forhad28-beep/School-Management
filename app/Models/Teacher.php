<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'employee_id',
        'name',
        'email',
        'phone',
        'gender',
        'date_of_birth',
        'joining_date',
        'photo',
        'address',
        'status',
    ];
}
