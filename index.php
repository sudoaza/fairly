<?php /*

          .___.    .   ,    ,      .__           
          [__ |* _ |_ -+-  -+- _   [__) _.._.* __
          |   ||(_][ ) |    | (_)  |   (_][  |_) 
                ._|                              

          Flight - Mike Cao // http://flightphp.com MIT
    Paris&Idiorm - Jamie Matthews // http://j4mie.github.com/idiormandparis BSD
 Flight to Paris - Aza // http://esfriki.com GPLv3

*/
include 'config.php';
mb_internal_encoding('UTF-8');

require APP_PATH.'/model/auth.php';
$auth = new auth;

// For local testing
if (php_sapi_name() == 'cli-server') {
    if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js|ttf|woff|otf|eot|svg)$/i', parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH))) {
        return false; 
    }
}

Flight::route('GET /?$',array('controller_layout','home'));

Flight::route('POST /url/shorten/?$', array('controller_url','shorten'));
Flight::route('GET /url/mine/?$', array('controller_url','mine'));
Flight::route('GET /auth/forget\-me/?$', array('controller_auth','forget_me'));

Flight::route('GET /@path:[a-z0-9_-]+/?$',array('controller_url','get'));


Flight::start();
