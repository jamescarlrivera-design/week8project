<?php

namespace App\Http\Controllers;
use App\Models\Courses;
use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;

class CourseController extends Controller
{

    public function index()
    {
        return view('courses.index', [
            'courses' => Courses::with('instructor')->get(),
        ]);
    }

    public function create()
    {
        return view('courses.create', [
            'course' => new Courses(),
            'instructors' => Instructor::orderBy('name')->get(),
        ]);
    }

    public function show(Courses $course)
    {
        return view('courses.show', compact('course'));
    }

    public function edit(Courses $course)
    {
        return view('courses.edit', [
            'course' => $course,
            'instructors' => Instructor::orderBy('name')->get(),
        ]);
    }

public function store(StoreCourseRequest $request)
{
    $data = $request->validated();

    unset($data['image']); // File handling comes in Part C.

    $course = Courses::create($data);

    return redirect()
        ->route('courses.show', $course)
        ->with('status', 'Course created.');
}

public function update(UpdateCourseRequest $request, Courses $course)
{
    $data = $request->validated();

    unset($data['image']); // File handling comes in Part C.

    $course->update($data);

    return redirect()
        ->route('courses.show', $course)
        ->with('status', 'Course updated.');
}



}
