<?php

namespace App\Http\Controllers\Admin\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Traits\CustomFunction;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    use CustomFunction;

    public function index()
    {
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }


    public function edit($uuid)
    {
        $service = Service::where('uuid', $uuid)->firstOrFail();
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, $uuid)
    {
        try {
            $service = Service::where('uuid', $uuid)->firstOrFail();
            $image = $service->image;
            if ($request->hasfile('image')) {
                $image = $this->uploadImage('image', $request->file('image'));
            }
            $service->update([
                'name' => $request->name,
                'title' => $request->title,
                'description' => $request->description,
                'content' => $request->service_content,
                'name_ar' => $request->name_ar,
                'title_ar' => $request->title_ar,
                'description_ar' => $request->description_ar,
                'service_content_ar' => $request->service_content_ar,
                'image' => $image,
            ]);
            $this->getSuccess('Service Updated Successfully');
            return redirect()->route('admin.services');
        } catch (\Exception $e) {
            $this->getError($e);
            return redirect()->route('admin.services');
        }
    }
}
