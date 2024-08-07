<?php

namespace App\Http\Controllers\Admin\Course;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Traits\CustomFunction;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    use CustomFunction;

    public function index()
    {
        $courses = Course::all();
        return view('admin.courses.index', compact('courses'));
    }

    public function create()
    {
        return view('admin.courses.create');
    }

    public function store(Request $request)
    {
        try {
            $image = '';
            if ($request->hasfile('image')) {
                $image = $this->uploadImage('image', $request->file('image'));
            }
            Course::create([
                'name' => $request->name,
                'description' => $request->description,
                'learn' => $request->learn,
                'course_content' => $request->course_content,
                'link' => $request->link,
                'image' => $image,
                'created_by' => auth()->guard('admin')->id()
            ]);
            $this->getSuccess('Course Created Successfully');
            return redirect()->route('admin.courses');
        } catch (\Exception $e) {
            $this->getError('Description or course_content or learn Required or all Data not Entered');
            return redirect()->route('admin.courses');
        }
    }


    public function edit($uuid)
    {
        $course = Course::where('uuid', $uuid)->firstOrFail();
        return view('admin.courses.edit', compact('course'));
    }

    public function update(Request $request, $uuid)
    {
        try {
            $course = Course::where('uuid', $uuid)->firstOrFail();
            $image = $course->image;
            if ($request->hasfile('image')) {
                $image = $this->uploadImage('image', $request->file('image'));
            }
            $course->update([
                'name' => $request->name,
                'description' => $request->description,
                'learn' => $request->learn,
                'course_content' => $request->course_content,
                'link' => $request->link,
                'image' => $image,
            ]);
            $this->getSuccess('Course Updated Successfully');
            return redirect()->route('admin.courses');
        } catch (\Exception $e) {
            $this->getError('Description or course content or learn Required or all Data not Entered');
            return redirect()->route('admin.courses');
        }
    }
}
