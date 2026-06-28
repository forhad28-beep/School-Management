<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'class_room_id',
        'name',
    ];

    public function classRoom()
    {
        return $this->belongsTo(ClassRoom::class);
    }
    public function students()
    {
        return $this->hasMany(Student::class);
    }
    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }
}
