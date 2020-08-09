<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Auth\Access\AuthorizationException;

class Admin
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

        //dd($request->user());

        //if(!auth()->user()->isAdmin()){
        if (! optional($request->user())->isAdmin()) {
            //throw new \Illuminate\Auth\Access\AuthorizationException;

            throw new AuthorizationException;

            // Otra manera de retornar la Respuesta
            //return response()
                //->view('forbidden', [], Response::HTTP_FORBIDDEN);
        }

        return $next($request);
    }
}
