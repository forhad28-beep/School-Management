<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStudentRequest;
use App\Models\ClassRoom;
use App\Models\Section;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::with([
            'classRoom',
            'section'
        ])->latest()->get();

        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $classes = ClassRoom::all();

        $sections = Section::all();

        return view('students.create', compact(
            'classes',
            'sections'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
        $photo = null;

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo')
                ->store('students', 'public');
        }

        $studentId = 'STD-' . str_pad(
            Student::count() + 1,
            5,
            '0',
            STR_PAD_LEFT
        );

        Student::create([
            'student_id' => $studentId,
            'class_room_id' => $request->class_room_id,
            'section_id' => $request->section_id,
            'roll' => $request->roll,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'father_name' => $request->father_name,
            'mother_name' => $request->mother_name,
            'guardian_phone' => $request->guardian_phone,
            'address' => $request->address,
            'admission_date' => $request->admission_date,
            'photo' => $photo,
            'status' => true,
        ]);

        return redirect()
            ->route('students.index')
            ->with('success', 'Student Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $classes = ClassRoom::all();
        $sections = Section::all();

        return view('students.edit', compact(
            'student',
            'classes',
            'sections'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'class_room_id' => 'required|exists:classes,id',
            'section_id' => 'required|exists:sections,id',
            'roll' => 'required',
            'name' => 'required|max:100',
            'phone' => 'required',
            'gender' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'guardian_phone' => 'required',
            'admission_date' => 'required|date',
            'photo' => 'nullable|image|max:2048'
        ]);

        $photo = $student->photo;

        if ($request->hasFile('photo')) {

            if (
                $student->photo &&
                Storage::disk('public')->exists($student->photo)
            ) {
                Storage::disk('public')->delete($student->photo);
            }

            $photo = $request->file('photo')
                ->store('students', 'public');
        }

        $student->update([

            'class_room_id' => $request->class_room_id,
            'section_id' => $request->section_id,
            'roll' => $request->roll,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'father_name' => $request->father_name,
            'mother_name' => $request->mother_name,
            'guardian_phone' => $request->guardian_phone,
            'address' => $request->address,
            'admission_date' => $request->admission_date,
            'photo' => $photo,

        ]);

        return redirect()
            ->route('students.index')
            ->with('success', 'Student Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        if (
            $student->photo &&
            Storage::disk('public')->exists($student->photo)
        ) {
            Storage::disk('public')->delete($student->photo);
        }

        $student->delete();

        return redirect()
            ->route('students.index')
            ->with('success', 'Student Deleted Successfully');
    }
}
