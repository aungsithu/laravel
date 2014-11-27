<?php 

class AuthController extends BaseController {

	public function getRegister() {

		return View::make('auth/register');
	}

	public function postRegister() {

			// echo Input::get('username');
			// echo Input::get('email');
			// echo Input::get('password');
			// echo Input::get('confirm_passowrd');
			// die();

			$data=Input::except('_token');
			
			$rules = array(

			'username' => 'required|min:3|max:30|unique:user',
			'email'    => 'required|email|unique:user', 
			'password' => 'required',
			'confirm_passowrd' => 'required'

			);

			$validator = Validator::make($data, $rules);
			// var_dump($validator);die();

			if ($validator->fails()) {
				echo "fail";
				return Redirect::to('auth/register')->withErrors($validator);

			} else {
				authantication::InsertUser(Input::get('username'), Input::get('email'), Input::get('password'));

				echo "user created!";
			}
			
	}


	public function getLogin() {

		return View::make('auth/login');
	}

	public function postLogin() {

		if (authantication::LoginUser(Input::get('username'),Input::get('password')) == TRUE) {
			echo "Welcome To Dashboard";
		} else {
			echo "Please login again";
		}
		
	}

	public function getReset() {

		return View::make('auth/reset');
	}

	public function postReset() {

		if (authantication::CheckEmail(Input::get('email')) == TRUE) {
			echo "Check reset password code in your email";
		} else {
			echo "Can't find your email in our database";
		}
		
	}
}


 ?>