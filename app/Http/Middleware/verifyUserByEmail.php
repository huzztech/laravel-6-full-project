<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class verifyUserByEmail
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
	
	/*public $loggedInUser;
	
	
	public function __construct($user)
    {
       $this->$loggedInUser = $user;
    }*/
	
    public function handle($request, Closure $next)
    {
		$user = \App\User::find(Auth::id());
		if($user->status == 0)
		{
			Auth::logout();
			return redirect('login')->with('message', 'Please Verify email to login.');
		}
        return $next($request);
    }
}
