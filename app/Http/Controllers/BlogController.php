<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;

class BlogController extends Controller
{
    public function blogsDoctors() {
        $blogs = Blog::where('type',0)->get();
        return view('website.blogs.blogs_doctors',compact('blogs'));
    }
    public function blogsPatient() {
        $blogs = Blog::where('type',1)->get();
        return view('website.blogs.blogs_patient',compact('blogs'));
    }
    public function show($uuid) {
        $blog = Blog::where('uuid',$uuid)->first();
        return view('website.blogs.show',compact('blog'));
    }
}
