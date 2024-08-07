<?php

namespace App\Http\Controllers\Admin\Event;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Traits\CustomFunction;
use Illuminate\Http\Request;

class EventAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    use CustomFunction;

    public function index()
    {
        $events = Event::all();
        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function store(Request $request)
    {
        try {
            $image = '';
            if ($request->hasfile('image')) {
                $image = $this->uploadImage('image', $request->file('image'));
            }
            Event::create([
                'name' => $request->name,
                'description' => $request->description,
                'link' => $request->link,
                'image' => $image,
                'created_by' => auth()->guard('admin')->id()
            ]);
            $this->getSuccess('Event Created Successfully');
            return redirect()->route('admin.events');
        } catch (\Exception $e) {
            $this->getError('Description  Required or all Data not Entered');
            return redirect()->route('admin.events');
        }
    }


    public function edit($uuid)
    {
        $event = Event::where('uuid', $uuid)->firstOrFail();
        return view('admin.events.edit', compact('event'));
    }

    public function update(Request $request, $uuid)
    {
        try {
            $event = Event::where('uuid', $uuid)->firstOrFail();
            $image = $event->image;
            if ($request->hasfile('image')) {
                $image = $this->uploadImage('image', $request->file('image'));
            }
            $event->update([
                'name' => $request->name,
                'description' => $request->description,
                'link' => $request->link,
                'image' => $image,
            ]);
            $this->getSuccess('Event Updated Successfully');
            return redirect()->route('admin.events');
        } catch (\Exception $e) {
            $this->getError('Description  Required or all Data not Entered');
            return redirect()->route('admin.events');
        }
    }
}
