<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckRole
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
        //Checa se existe algum usuário logado
        $user = auth()->guard('admin')->user();

        if($user === null)
        {
            return redirect('/admin')->with('error-msg', 'Permissão negada.');
        }

        // Desta forma pegaremos o array que fica no arquvio de dotas relativo a cada ação
        $actions = $request->route()->getAction();

        $roles = isset($actions['roles'])? $actions['roles'] : null;

        if($user->hasAnyRole($roles) || !$roles)
        {
            return $next($request);
        }

        return redirect('/admin')->with('error-msg', 'Permissão negada.');


    }
}
