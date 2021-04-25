<?php

namespace App\Http\Middleware;

use Closure;

class UserAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        //If admin logged in and access to login page then we will redirect to home page.
        if(!session()->has('admin_user')){
            // return redirect()->route('admin.login_page');
            // return redirect('admin/login');
        }

        // if($request->path() == 'admin/login' && $request->session()->has('admin_user')){
        if($request->path() == 'admin/login' && $request->session()->has('admin_user')){
            return redirect('admin/dashboard');
        }
        return $next($request);
    }
}
