<?php

namespace App\Http\Middleware;

use Closure;

class MidelwUsuarioAdmin
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
        $usuario_actual=\Auth::user();

        if ($usuario_actual->fk_id_privilegios!=2){
            return redirect()->route('home');
            /**return view("home")->with('No eres Administrador');*/
        }
        return $next($request);
    }
}
