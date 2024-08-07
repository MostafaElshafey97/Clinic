<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Event;
use App\Models\Journal;
use App\Models\Researcher;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function Events() {
        $events = Event::all();
        return view('website.professionals.events',compact('events'));
    }

    public function show($uuid) {
        $event = Event::where('uuid',$uuid)->first();
        return view('website.professionals.event_show',compact('event'));
    }

    public function Researches() {
        $researches = Researcher::all();
        return view('website.professionals.researches',compact('researches'));
    }

    public function fellowShip() {
        return view('website.professionals.fellowship');
    }

    public function professionalResources() {
        $courses = Course::all();
        return view('website.professionals.professionalresources',compact('courses'));
    }

    public function viewProResource($uuid) {
        $course = Course::where('uuid',$uuid)->first();
        return view('website.professionals.viewproresource',compact('course'));
    }

    public function journals() {
        $journals = Journal::all();
        return view('website.professionals.journals' , compact('journals'));
    }

    public function publishWithUs() {
        return view('website.professionals.publishwithus');
    }
}
