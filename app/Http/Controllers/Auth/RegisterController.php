<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Str;

use Mail;
use App\Mail\verifyUserByEmail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'dob' => $data['dob'],
            'verifyToken' => Str::random(25),
            //'verifyToken' => Str::random(40),
        ]);

        Mail::to($user->email)->send(new verifyUserByEmail($user));
        return $user;
    }
	
	public function verifyemail($email, $token)
	{
		$user = User::where(['email'=>$email, 'verifyToken'=>$token])->first();
		
		if($user)
		{
			$user->verifyToken = '';
			$user->status = 1;
			
			$saveif = $user->save();
			
			if($saveif)
			{
				return redirect('login')->with('message', 'You account has been verified.');
			}
			else
			{
				return redirect('login')->with('message', 'Invalid email or token.');
			}
		}
		else
		{
			return redirect('login')->with('message', 'Invalid email or token.');
		}
		
		
	}
}
