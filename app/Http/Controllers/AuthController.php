<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\AuthenticateUser;


class AuthController extends Controller {

	public function login(AuthenticateUser $authenticateUser, Request $request)
	{

		return $authenticateUser->execute($request->has('code'), $this);

	}

	public function userHasLoggedIn($user)
	{
		return redirect('/');
	}

}
