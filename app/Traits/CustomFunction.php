<?php

namespace App\Traits;

/**
 * This trait for return message for blade
 */
trait CustomFunction
{
    function uploadImage($folder, $image)
    {
        $image->store('/', $folder);
        $filename = $image->hashName();
        return $filename;
    }

    public function getSuccess($message)
    {
        Toastr()->success(
            $message,
           'Success',
            [
                "closeButton" => true,
                "progressBar" => true,
                "positionClass" => app()->getLocale() == 'en' ? "toast-top-right" : "toast-top-left",
                "timeOut" => "10000",
                "extendedTimeOut" => "10000",
            ]
        );
    }

    public function getError($message)
    {
        Toastr()->error(
            $message,
            'Error',
            [
                "closeButton" => true,
                "progressBar" => true,
                "positionClass" => app()->getLocale() == 'en' ? "toast-top-right" : "toast-top-left",
                "timeOut" => "10000",
                "extendedTimeOut" => "10000",
            ]
        );
    }

}
