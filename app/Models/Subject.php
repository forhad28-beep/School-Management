<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'class_room_id',
        'name',
        'code',
        'full_mark',
    ];

    public function classRoom()
    {
        return $this->belongsTo(ClassRoom::class);
    }
}
