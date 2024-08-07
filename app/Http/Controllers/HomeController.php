<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Surah;
use App\Models\SurahPage;
use App\Models\Verse;
use Illuminate\Http\Request;
use App\Traits\CustomFunction;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    use CustomFunction;
    public function index()
    {

    }

    public function booking() {
        $appointments = Appointment::all();
        return view('admin.booking', compact('appointments'));
    }

    public function showBooking($uuid) {
        $appointment = Appointment::where('uuid',$uuid)->first();
        return view('admin.show_booking', compact('appointment'));
    }

    public function changeStatus(Request $request) {
       return Appointment::where('id',$request->id)->update([
            'status' => $request->status
        ]);
    }

    public function deleteBooking($uuid) {
        $appointment = Appointment::where('uuid',$uuid)->firstOrFail();
        if($appointment->status == 1) {
            $this->getError('Booking Approved Cannot Deleted ');
            return redirect()->route('admin.booking');  
        } else {
            $appointment->delete();
            $this->getSuccess('Booking Deleted Successfully');
            return redirect()->route('admin.booking');  
        }
        
    }    

}
