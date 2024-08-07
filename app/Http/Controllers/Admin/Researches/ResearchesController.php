<?php

namespace App\Http\Controllers\Admin\Researches;

use App\Http\Controllers\Controller;
use App\Models\Researcher;
use App\Traits\CustomFunction;
use Illuminate\Http\Request;

class ResearchesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    use CustomFunction;

    public function index()
    {
        $researches = Researcher::all();
        return view('admin.researches.index', compact('researches'));
    }

    public function create()
    {
        return view('admin.researches.create');
    }

    public function store(Request $request)
    {
        try {
            $source = '';
            if ($request->hasfile('source')) {
                $source = $this->uploadImage('image', $request->file('source'));
            }
            Researcher::create([
                'title' => $request->title,
                'description' => $request->description,
                'author' => $request->author,
                'link' => $request->link,

                'source' => $source,

                'created_by' => auth()->guard('admin')->id()
            ]);
            $this->getSuccess('Researcher Created Successfully');
            return redirect()->route('admin.researches');
        } catch (\Exception $e) {
            $this->getError('Description  Required or all Data not Entered');
            return redirect()->route('admin.researches');
        }
    }


    public function edit($uuid)
    {
        $researcher = Researcher::where('uuid', $uuid)->firstOrFail();
        return view('admin.researches.edit', compact('researcher'));
    }

    public function update(Request $request, $uuid)
    {
        try {
            $researcher = Researcher::where('uuid', $uuid)->firstOrFail();
            $source = $researcher->source;
            if ($request->hasfile('source')) {
                $source = $this->uploadImage('image', $request->file('source'));
            }
            $researcher->update([
                'title' => $request->title,
                'description' => $request->description,
                'source' => $source,
                'link' => $request->link,
                'author' => $request->author,
            ]);
            $this->getSuccess('Researcher Updated Successfully');
            return redirect()->route('admin.researches');
        } catch (\Exception $e) {
            $this->getError('Description  Required or all Data not Entered');
            return redirect()->route('admin.researches');
        }
    }
}
