<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClassRoom;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        $classes = ClassRoom::all();

        return view(
            'attendance.index',
            compact('classes')
        );
    }
}
