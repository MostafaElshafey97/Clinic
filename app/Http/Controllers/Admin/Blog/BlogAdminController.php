<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Traits\CustomFunction;

class BlogAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    use CustomFunction;

    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        try {
            $image = '';
            if ($request->hasfile('image')) {
                $image = $this->uploadImage('image', $request->file('image'));
            }
            Blog::create([
                'name' => $request->name,
                'title' => $request->title,
                'type' => $request->title,
                'description' => $request->description,
                'image' => $image,
                'created_by' => auth()->guard('admin')->id()
            ]);
            $this->getSuccess('Blog Created Successfully');
            return redirect()->route('admin.blogs');
        } catch (\Exception $e) {
            $this->getError('Description Required or all Data not Entered');
            return redirect()->route('admin.blogs');
        }
    }


    public function edit($uuid)
    {
        $blog = Blog::where('uuid', $uuid)->firstOrFail();
        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, $uuid)
    {
        try {
            $blog = Blog::where('uuid', $uuid)->firstOrFail();
            $image = $blog->image;
            if ($request->hasfile('image')) {
                $image = $this->uploadImage('image', $request->file('image'));
            }
            $blog->update([
                'name' => $request->name,
                'title' => $request->title,
                'type' => $request->type,
                'description' => $request->description,
                'image' => $image,
            ]);
            $this->getSuccess('Blog Updated Successfully');
            return redirect()->route('admin.blogs');
        } catch (\Exception $e) {
            $this->getError('Description Required or all Data not Entered');
            return redirect()->route('admin.blogs');
        }
    }
}
