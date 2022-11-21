<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class UserFront
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

        if (!is_null($request->user())){
            if($request->user()->statut==1){
                if($request->user()->validate==1){
                    return $next($request);
                }
                Auth::logout();
                return redirect()->route('front-users.index')->with('Info','Votre compte a été suspendu par l\'administration. Veuillez les contactes');
            }
            $type="Inscription";
            dispatch(new SendEmailJob($request->user(),$type,$request->user()->token_statut));
            Auth::logout();
            return redirect()->route('front-users.index')
                ->with(
                    'Info',
                    'La confirmation précédente de votre inscription n\'a pas été effectuer. Un nouveau mail de confirmation vous a été envoyer');
        }
        return redirect()->route('front-users.index')->with('Info','Connectez vous pour continuer');
    }
}
