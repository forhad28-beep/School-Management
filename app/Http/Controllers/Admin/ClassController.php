<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClassRoom;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classes = ClassRoom::latest()->get();

        return view('classes.index', compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('classes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'code' => 'required|unique:classes',
        ]);

        ClassRoom::create($request->all());

        return redirect()->route('classes.index')
            ->with('success', 'Class Created Successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ClassRoom $class)
    {
        return view('classes.edit', compact('class'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ClassRoom $class)
    {
        $request->validate([
            'name' => 'required|max:100',
            'code' => 'required|unique:classes,code,' . $class->id,
        ]);

        $class->update($request->all());

        return redirect()
            ->route('classes.index')
            ->with('success', 'Class Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ClassRoom $class)
    {
        $class->delete();

        return redirect()
            ->route('classes.index')
            ->with('success', 'Class Deleted Successfully');
    }
}
