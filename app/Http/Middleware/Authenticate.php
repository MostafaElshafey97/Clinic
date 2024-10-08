<?php

namespace App\Http\Middleware;

use http\Env\Request;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            if(\Illuminate\Support\Facades\Request::is('admin/*')) {
                return route('admin.login');
            } else {
                return route('website.index');
            }
        }
    }
}
