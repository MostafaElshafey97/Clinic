<?php

namespace App\Http\Controllers;

use App\Models\GoogleReview;
use App\Models\PublicData;
use App\Models\Story;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Traits\CustomFunction;
use App\Models\Event;
use App\Models\Service;

class WebsiteController extends Controller
{
    use CustomFunction;
    public function index() {
        $events = Event::get();
        $services = Service::all();
        $public_data = PublicData::first();
        $google_reviews = GoogleReview::all();
        return view('website.home' , compact('events', 'public_data' , 'google_reviews','services'));
    }

    public function sp1() {
        $service = Service::where('id',1)->first();
        return view('website.services.sp1' , compact('service'));
    }
    public function sp2() {
        $service = Service::where('id',2)->first();
        return view('website.services.sp2' , compact('service'));
    }
    public function sp3() {
        $service = Service::where('id',3)->first();
        return view('website.services.sp3' , compact('service'));
    }
    public function sp4() {
        $service = Service::where('id',4)->first();
        return view('website.services.sp4' , compact('service'));
    }
    public function sp5() {
        $service = Service::where('id',5)->first();
        return view('website.services.sp5' , compact('service'));
    }
    public function sp6() {
        $service = Service::where('id',6)->first();
        return view('website.services.sp6' , compact('service'));
    }
    public function sp7() {
        $service = Service::where('id',7)->first();
        return view('website.services.sp7' , compact('service'));
    }
    public function successStory () {
        $stories = Story::all();
        return view('website.stories',compact('stories'));
    }
    public function showSuccessStory ($uuid) {
        $story = Story::with('subStory')->where('uuid',$uuid)->firstOrFail();
        return view('website.show_story', compact('story'));
    }

    public function about () {
        return view('website.about');
    }

    public function aboutdrmoustafa () {
        return view('website.aboutdrmoustafa');
    }

    public function ourDoctors () {
        return view('website.ourdoctors');
    }

    public function doctorDetails ($uuid) {
        return view('website.doctordetails');
    }

    public function contact () {
        return view('website.contact');
    }

    public function faq () {
        return view('website.faq');
    }

    public function tipSandTricks () {
        return view('website.tipsandtricks');
    }

    //  public function appointmentStore(Request $request,$type)
    // {
    //     if($request->type == 0) {
    //         $dateObj = \DateTime::createFromFormat('m/d/Y', $request->date);
    //         $date = $dateObj->format('Y-m-d');

    //     } else  {
    //         $date =  $request->date;
    //     }
    //     Appointment::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'phone' => $request->phone,
    //         'date' => $date,
    //         'message' => $request->msg,
    //         'clinic' => $request->clinic,
    //         'department' => $request->department,
    //         'type' => $type,
    //         'status' => 0
    //     ]);
    //     $this->getSuccess('Appointment Created Successfully');
    //     return redirect()->back();
    // }
    public function appointmentStore(Request $request, $type)
    {
        // التحقق من حالة الحجز
        $bookingStatus = PublicData::first();
    
        // إذا كانت حالة الحجز غير مفعلة
        if ($bookingStatus && $bookingStatus->booking_status == 'inactive') {
            // عرض رسالة مناسبة ومنع إنشاء الموعد
            return redirect()->back()->with('error', 'Appointment booking is currently inactive. Please wait for activation.');
        }
    
        // تحويل التاريخ إلى التنسيق المطلوب
        if ($request->type == 0) {
            $dateObj = \DateTime::createFromFormat('m/d/Y', $request->date);
            $date = $dateObj->format('Y-m-d');
        } else {
            $date =  $request->date;
        }
    
        // إنشاء الموعد
        Appointment::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'date' => $date,
            'message' => $request->msg,
            'clinic' => $request->clinic,
            'department' => $request->department,
            'type' => $type,
            'status' => 0
        ]);
    
        return redirect()->back()->with('success', 'Appointment Created Successfully');
    }
    


}
