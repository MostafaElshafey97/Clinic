<?php

namespace App\Http\Controllers\Admin\Stories;

use App\Http\Controllers\Controller;
use App\Models\Story;
use App\Models\SubStory;
use App\Traits\CustomFunction;
use Illuminate\Http\Request;

class StoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    use CustomFunction;

    public function index()
    {
        $stories = Story::all();
        return view('admin.stories.index', compact('stories'));
    }

    public function create()
    {
        return view('admin.stories.create');
    }

    public function store(Request $request)
    {
        try {
            $image = '';
            if ($request->hasfile('image')) {
                foreach ($request->file('image') as $image_data) {
                    $image .= ',' . $this->uploadImage('image', $image_data);
                }
            }
            $image = substr($image, 1);
            Story::create([
                'name' => $request->name,
                'content' => $request->contents,
                'image' => $image,
                'created_by' => auth()->guard('admin')->id()
            ]);
            $this->getSuccess('Story Created Successfully');
            return redirect()->route('admin.stories');
        } catch (\Exception $e) {
            $this->getError('Description  Required or all Data not Entered');
            return redirect()->route('admin.stories');
        }
    }


    public function edit($uuid)
    {
        $story = Story::where('uuid', $uuid)->firstOrFail();
        return view('admin.stories.edit', compact('story'));
    }

    public function update(Request $request, $uuid)
    {
        try {
            $story = Story::where('uuid', $uuid)->firstOrFail();
            $image = $story->image;
            if ($request->hasfile('image')) {
                $image = '';
                foreach ($request->file('image') as $image_data) {
                    $image .= ',' . $this->uploadImage('image', $image_data);
                }
                $image = substr($image, 1);
            }
            $story->update([
                'name' => $request->name,
                'content' => $request->contents,
                'image' => $image,
            ]);
            $this->getSuccess('Story Updated Successfully');
            return redirect()->route('admin.stories');
        } catch (\Exception $e) {
            $this->getError('Description  Required or all Data not Entered');
            return redirect()->route('admin.stories');
        }
    }

    public function createSubStory($uuid)
    {
        return view('admin.stories.create_sub_story', compact('uuid'));
    }

    public function storeSubStory(Request $request, $uuid)
    {
        $story = Story::where('uuid', $uuid)->firstOrFail();
        $image = '';
        if ($request->hasfile('image')) {
            $image = $this->uploadImage('image', $request->file('image'));
        }
        SubStory::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image,
            'story_id' => $story->id,
        ]);
        $this->getSuccess('Sub Story Created Successfully');
        return redirect()->back();
    }

    public function showSubStory($uuid)
    {
        $story = Story::with('subStory')->where('uuid', $uuid)->firstOrFail();
        return view('admin.stories.show_sub_story', compact('story'));
    }

    public function editSubStory($uuid)
    {
        $sub_story = SubStory::where('uuid', $uuid)->firstOrFail();
        return view('admin.stories.edit_sub_story', compact('sub_story'));
    }

    public function updateSubStory(Request $request, $uuid)
    {
        $sub_story = SubStory::with('story')->where('uuid', $uuid)->firstOrFail();
        $image = $sub_story->image;
        if ($request->hasfile('image')) {
            $image = $this->uploadImage('image', $request->file('image'));
        }
        $sub_story->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image,
        ]);
        $this->getSuccess('Story Updated Successfully');
        return redirect()->route('admin.stories.show_sub_story', $sub_story->story->uuid);
    }

}
