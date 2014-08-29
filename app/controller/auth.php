<?php

class controller_auth {

	public function login() {
		$data = Flight::request()->data;
		$user = model_user::getByUsername($data['username']);
		if ( $user ) {
			$auth = model_auth::getByUserId($user->id);
			if ( $auth->checkPassword($data['password']) ) {
				$auth->login();
				model_auth::clearFailed($user->id);
			} else {
				Flight::flash('message',array('type'=>'error','text'=>'@#$%^&*!'));
				model_auth::increaseFailed($user->id);
			}
		} else {
			Flight::flash('message',array('type'=>'error','text'=>'@#$%^&*!'));
		}

		Flight::redirect(View::makeUri('/'));
	}

	public function logout() {
		session_start();
		session_unset();
		session_destroy();
		session_write_close();
		session_regenerate_id(true);
		Flight::render('auth_logout',null,'layout');
	}

  public function forget_me() {
    auth::regenerate_user_hash();

    if ( auth::isLoggedIn() ) {
      $auth = model_auth::getCurrent();
      $auth->user_hash = auth::getUserHash();
      $auth->save();
    }

    self::logout();
  }

	public function change() {
		Flight::render('auth_change',null,'layout');
	}

	public function dochange() {
		$data = Flight::request()->data;
		$auth = model_auth::getCurrent();
		if ( $auth->checkPassword($data['password']) ) {
			if ( $data['newpassword'] == $data['repeatpassword'] ) {
				$auth->changePassword($data['newpassword']);
				Flight::flash('message',array('type'=>'success','text'=>'Cambiaste la contraseña con éxito.'));
				Flight::redirect(View::makeUri('/'));
			} else {
				Flight::flash('message',array('type'=>'error','text'=>'La nueva contraseña es distinta a la repetida.'));
				Flight::redirect(View::makeUri('/auth/changepassword'));
			}
		} else {
			Flight::flash('message',array('type'=>'error','text'=>'El password es incorrecto.'));
			Flight::redirect(View::makeUri('/auth/changepassword'));
		}
	}

}
