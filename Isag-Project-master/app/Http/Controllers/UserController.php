<?php
/**
*
*/
class UserController extends BaseController{
	
	public function loginController(){
		if(Session::get('users','error')=='error'){
			return Redirect::to('/login');
		}
		else return Redirect::to('index');
		}

	public function ShowLogin(){
		if(Session::get('users','error')=='error'){
			return view::make('login');
		}
	}	

	public function login(){

		$emailInput->setname(Input::get()'email');
		$passwordInput->setpassword(hash::make(Input::get('password')));
		
		$usertry = array('email' => $emailInput,'password' => $passwordInput);
		if(Auth::attempt($usertry))
			return Redirect::to('/');
		else 
			return Redirect::to('/login');
		
		}

	}
}