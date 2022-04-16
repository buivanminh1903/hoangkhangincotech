<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!session()->has('LoggedUser') && ($request->path() !='admin/login' && $request->path() !='admin/register')){
            return redirect('admin/login')-> with('fail', 'Vui lòng đăng nhập để sử dụng chức năng này!');
        }
        if(!session()->has('LoggedUser') && ($request->path() !='admin/login' && $request->path() !='admin/register')){
            return back();
        }
        return $next($request);
    }
}
