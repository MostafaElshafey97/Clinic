<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function Patientguide() {
        return view('website.patient.patientguide');
    }

    public function requestMedicalRecord() {
        return view('website.patient.requestmedicalrecord');
    }
    public function showAlert(Request $request)
    {
        return redirect()->back()->with('alert', 'Medical records can be obtained by app');
    }

    public function patientEducationVideo() {
        return view('website.patient.patienteducationvideo');
    }

    public function pre_op() {
        return view('website.patient.pre-op');
    }

    public function post_op() {
        return view('website.patient.post-op');
    }

    public function findPhysicalTherapist() {
        return view('website.patient.findphysicaltherapist');
    }

    public function patientForm() {
        return view('website.patient.patientform');
    }
}
