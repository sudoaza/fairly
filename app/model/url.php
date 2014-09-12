<?php

use Hybrid\Cache as HybridCache;

class model_url {

  public static function getByShort( $short_url ) {
      return Model::factory('url')->where('short_url', $short_url)->find_one();
	}

  public static function getByLong( $long_url ) {

    $cache = new HybridCache(__METHOD__,$content);

    $url = $cache->getCacheOr(function ($cache) USE ($long_url) {
    return Model::factory('url')->where('long_url',$long_url)->find_one();
    });

    return $url;

  }

  public static function getByUserHash( $user_hash ) {
    return Model::factory('url')->where('user_hash',$user_hash)->find_many();
  }

  public static function validLong($long_url) {
    $long_url = trim($long_url);
    return filter_var($long_url, FILTER_VALIDATE_URL, FILTER_FLAG_SCHEME_REQUIRED | FILTER_FLAG_HOST_REQUIRED);
  }

  public static function validShort($short_url) {
    if ( ! is_null($short_url) ) {
      $short = trim($short);
      if ( self::getByShort($short) ) {
        return false;
      } else {
        return filter_var($short_url, FILTER_VALIDATE_URL, FILTER_FLAG_SCHEME_REQUIRED | FILTER_FLAG_HOST_REQUIRED);
      }
    }
    return true;
  }

  public static function exists($long_url, $user_hash) {
    return Model::factory('url')->where_equal('long_url',$long_url)->
      where_equal('user_hash',$user_hash)->find_one();
  }

  public static function fixIfPossible( $url ) {
    if ( ! model_url::validLong($url) && model_url::validLong('http://'.trim($url)) ) {
      $url = 'http://'.trim($url);
    }
    return trim($url);
  }
}

class url extends Model {

}

/* 
	License:
		All of this was stolen from somewhere a long long 
	time ago and modified randomly to add "features".
*/
class e {

  //const $codeset = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
  //readable character set excluded (0,O,1,l)
  const codeset = "23456789abcdefghijkmnopqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ";

  static function encode($n) {
    $base = strlen(self::codeset);
    $converted = '';

    while ($n > 0) {
      $converted = substr(self::codeset, bcmod($n,$base), 1) . $converted;
      $n = self::bcFloor(bcdiv($n, $base));
    }

    return $converted ;
  }

  static function decode($code) {
    $base = strlen(self::codeset);
    $c = '0';
    for ($i = strlen($code); $i; $i--) {
      $c = bcadd($c,bcmul(strpos(self::codeset, substr($code, (-1 * ( $i - strlen($code) )),1))
             ,bcpow($base,$i-1)));
    }

    return bcmul($c, 1, 0);
  }

  static private function bcFloor($x) {
    return bcmul($x, '1', 0);
  }

  static private function bcCeil($x) {
    $floor = bcFloor($x);
    return bcadd($floor, ceil(bcsub($x, $floor)));
  }

  static private function bcRound($x) {
    $floor = bcFloor($x);
    return bcadd($floor, round(bcsub($x, $floor)));
  }
}
