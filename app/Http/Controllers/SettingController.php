<?php

namespace App\Http\Controllers;

use App\Models\PublicData;
use App\Models\Setting;
use App\Traits\CustomFunction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{

    use CustomFunction;
    public function setting() {
        $public_data = PublicData::first();
        $admin = \Auth::guard('admin')->user();
        return view('admin.setting', compact('public_data','admin'));
    }
    public function settingStore(Request $request) {
        try {
            PublicData::query()->truncate();
            PublicData::create([
                'email' => $request->email,
                'phone' => $request->phone,
                'whatsapp' => $request->whatsapp,
                'facebook' => $request->facebook,
                'instagram' => $request->instagram,
                'linkedin' => $request->linkedin,
                'twitter' => $request->twitter,
                'booking_status' => $request->booking_status, // إضافة حقل حالة الحجز هنا
                'updated_by' => auth()->guard('admin')->id()
            ]);
            $this->getSuccess('Data Updated Successfully');
            return redirect()->route('admin.setting');
        } catch (\Exception $e) {
            $this->getError($e->getMessage());
            return redirect()->route('admin.setting');
        }
    }
    
    // public function settingStore(Request  $request) {
    //     try {
    //         PublicData::query()->truncate();
    //         PublicData::create([
    //             'email' => $request->email,
    //             'phone' => $request->phone,
    //             'whatsapp' => $request->whatsapp,
    //             'facebook' => $request->facebook,
    //             'instagram' => $request->instagram,
    //             'linkedin' => $request->linkedin,
    //             'twitter' => $request->twitter ,
    //             'updated_by' => auth()->guard('admin')->id()
    //         ]);
    //         $this->getSuccess('Data Updated Successfully');
    //         return redirect()->route('admin.setting');
    //     } catch (\Exception $e) {
    //         $this->getError($e->getMessage());
    //         return redirect()->route('admin.setting');
    //     }

    // }

    public function adminUpdateAccount(Request  $request) {
        try {
            $admin = \Auth::guard('admin')->user();

            // Check if the current password matches the user's stored password
            if (!Hash::check($request->current_password, $admin->password)) {
                 $this->getError('Current password is incorrect.');
                return redirect()->route('admin.setting');

            }

            // Check if the new password and its confirmation match
            if ($request->password !== $request->password_confirmation ) {
                 $this->getError('New password and confirmation do not match.');
                return redirect()->route('admin.setting');
            }

            $admin->password = Hash::make($request->password);
            $admin->save();
            $this->getSuccess('Password successfully updated.');
            return redirect()->route('admin.setting');
        } catch (\Exception $e) {
            $this->getError($e->getMessage());
            return redirect()->route('admin.setting');
        }
    }

}
