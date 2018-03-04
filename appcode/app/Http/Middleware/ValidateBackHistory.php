<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class ValidateBackHistory
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
        if (!$request->session()->exists('user')) {
           // echo "not found";
            return redirect('/');
        }
        else{
           echo "found";
            exit;
        }
       
        
       /*  $response = $next($request); */
        
 /* return $response->header('Cache-Control','nocache, no-store, max-age=0, must-revalidate')
 ->header('Pragma','no-cache') //HTTP 1.0
 ->header('Expires','Sat, 01 Jan 1990 00:00:00 GMT'); */
    }
}
