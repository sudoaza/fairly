<?php

class model_user {

	public static function getByUsername( $username ) {
		return Model::factory('user')->where('username', $username)->find_one();
	}

	public static function getByUri( $uri ) {
		return Model::factory('user')->where('uri', $uri)->find_one();
	}

	public static function getById( $id ) {
		return Model::factory('user')->where('id', $id)->find_one();
	}

	public static function canRegister( $username ) {
		if ( trim( $username ) ) {
			$user = Model::factory('user')->where('username',$username)->find_one();
			return !$user;
		} else {
			return false;
		}
	}

}

class user extends Model {

	public function getAuth() {
		return Model::factory('auth')->where('user_id',$this->id)->find_one();
	}

}
