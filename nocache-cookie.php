<?php

/*  @making-wp-super-cache-work-with-custom-cookies
* WP-Supercache plugin
* This file goes in wp-content/wp-super-cache/plugins/
* and hook into the wp_cache_get_cookies_values cacheaction.
* See wp-cache-phase1.php (search for wp_cache_get_cookies_values)
* You have to add the cache string also in .htaccess
*
*/

function no_cache_cookie($cache){
   if(isset($_COOKIE['cache_str']) )
      $cache .= $_COOKIE['cache_str'];
   return $cache;
}
add_cacheaction('wp_cache_get_cookies_values','no_cache_cookie');

?>