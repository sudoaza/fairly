<?php

class controller_url {

	// Show a single node
	public function get($path) {
		$view = Flight::View();
		$layout = 'layout';

		$url = model_url::getByShort(View::makeUri($path));

		if ( $url ) {
      $url->visits++;
      $url->save();
			Flight::redirect($url->long_url);
			//$view->set('url',$url->url);
			//$template = 'url_get';
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
		$long_url = model_url::fixIfPossible($data['url']);
    $short_url = isset($data['short_url']) ? $data['short_url'] : null;

		// If we can use this urls
		if ( model_url::validLong($long_url) && model_url::validShort($short_url)) {

      // If it isn't a custom short and we dont already have one
      if ( ! ( is_null($short_url) && model_url::exists($long_url, auth::getUserHash()) ) ) {
        $url = Model::factory('url')->create();
        $url->long_url = trim($long_url);
        $url->short_url = trim($short_url);
        $url->user_hash = auth::getUserHash();

        // If not custom short get me a valid short
        if ( is_null($short_url) ) {
          do {

            $url->short_url = View::makeUri('/'.e::encode(rand(1,645999999)));

          } while ( ! model_url::validShort($url->short_url) );
        }

        $url->save();

        Flight::flash('message',array('type'=>'success','text'=>'URL saved'));

      } else {
        Flight::flash('message',array('type'=>'info','text'=>'URL already saved'));
      }

			Flight::redirect('/url/mine');

		} else {

      Flight::flash('message',array('type'=>'danger','text'=>'Invalid URL'));

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
