<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTeacherRequest;
use App\Models\Teacher;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::latest()->get();

        return view('teachers.index', compact('teachers'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeacherRequest $request)
    {
        $photo = null;

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo')
                ->store('teachers', 'public');
        }

        $employeeId = 'EMP-' . str_pad(
            Teacher::count() + 1,
            4,
            '0',
            STR_PAD_LEFT
        );

        Teacher::create([
            'employee_id' => $employeeId,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'joining_date' => $request->joining_date,
            'photo' => $photo,
            'address' => $request->address,
            'status' => true,
        ]);

        return redirect()
            ->route('teachers.index')
            ->with('success', 'Teacher Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        return view('teachers.show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        return view('teachers.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email|unique:teachers,email,' . $teacher->id,
            'phone' => 'required|unique:teachers,phone,' . $teacher->id,
            'gender' => 'required',
            'joining_date' => 'required|date',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $photo = $teacher->photo;

        if ($request->hasFile('photo')) {

            if ($teacher->photo && Storage::disk('public')->exists($teacher->photo)) {

                Storage::disk('public')->delete($teacher->photo);

            }

            $photo = $request->file('photo')
                ->store('teachers', 'public');
        }

        $teacher->update([

            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'joining_date' => $request->joining_date,
            'photo' => $photo,
            'address' => $request->address,
        ]);

        return redirect()
            ->route('teachers.index')
            ->with('success', 'Teacher Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        if ($teacher->photo && Storage::disk('public')->exists($teacher->photo)) {

            Storage::disk('public')->delete($teacher->photo);

        }

        $teacher->delete();

        return redirect()
            ->route('teachers.index')
            ->with('success', 'Teacher Deleted Successfully');
    }
}
