<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
    protected $table = 'classes';

    protected $fillable = [
        'name',
        'code',
        'description',
    ];

    public function sections()
    {
        return $this->hasMany(Section::class, 'class_room_id');
    }
    public function subjects()
    {
        return $this->hasMany(Subject::class, 'class_room_id');
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
