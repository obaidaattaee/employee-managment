<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CompanyVerifiedMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check()) {
            if (auth()->user()->active !== 1) {
                session()->flash('msg' , 'w: لم يتم تفعيل حسابك بعد يرجى مراجعة مدير النظام');
                return redirect(route('home')) ;
            }
        }
        return $next($request);
    }
}
