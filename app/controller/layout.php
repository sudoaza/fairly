<?php

class controller_layout {

	public function home() {
		$view = Flight::View();
		$layout = 'layout';

    $view->set('body_class','homepage');

		Flight::render('home', null, $layout);
	}

}
