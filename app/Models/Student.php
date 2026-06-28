<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [

        'student_id',
        'class_room_id',
        'section_id',
        'roll',
        'name',
        'email',
        'phone',
        'gender',
        'date_of_birth',
        'father_name',
        'mother_name',
        'guardian_phone',
        'address',
        'admission_date',
        'photo',
        'status',
    ];

    public function classRoom()
    {
        return $this->belongsTo(ClassRoom::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
