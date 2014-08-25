<?php

class controller_url {

	// Show a single node
	public function get($path) {
		$view = Flight::View();
		$layout = 'layout';

		$url = model_url::getByShort(View::makeUri($path));

		if ( $url ) {
			$view->set('url',$url);
			$template = 'url_get';
		} else {
			$view->set('short_url', View::makeUri($path));
			Flight::Response()->status(404);
			$template = 'url_404';
		}

		if ( Flight::request()->ajax ) {
			$template = $template.'_ajax';
			$layout = null;
		} else {
      $template .= '_html';
    }

		Flight::render($template, null, $layout);
	}

	// Create a new short url
	public function shorten() {
		$data = Flight::request()->data;
		$long_url = $data['url'];
    $short_url = isset($data['short_url']) ? $data['short_url'] : null;

		// If we can use this urls
		if ( model_url::validLong($long_url) && model_url::validShort($short_url)) {

      if ( ! model_url::exists($long_url, $short_url) ) {
        $url = Model::factory('url')->create();
        $url->long_url = trim($long_url);
        $url->short_url = trim($short_url);
        $url->user_hash = auth::getUserHash();

        if ( is_null($short_url) ) {
          $url->save(); // so we get an id
          $url->short_url = View::makeUri('/'.e::encode($url->id));
        }

        $url->save();

        Flight::flash('message',array('type'=>'success','text'=>'URL saved'));
      }

			Flight::redirect('/url/mine');

		} else {

      Flight::flash('message',array('type'=>'error','text'=>'Invalid URL'));

      if ( Flight::request()->ajax ) {
			  Flight::Response()->status(400);
		    Flight::render('ajax_error', null, null);
      } else {
			  Flight::redirect('/url/mine');
      }
		}
	}

	// Show a single node
	public function mine() {
		$view = Flight::View();
		$layout = 'layout';

		$urls = model_url::getByUserHash(auth::getUserHash());

	  $view->set('urls',$urls);
		$template = 'url_mine';

		if ( Flight::request()->ajax ) {
			$template = $template.'_ajax';
			$layout = null;
		} 

		Flight::render($template, null, $layout);
	}



}
