<?php

/* Override "thoughts on" for another language
* than english. 
* Translation is not working....
*/
add_filter('tc_comment_title','alter_thoughts_on');

function alter_thoughts_on($content) {
 $content = str_replace("thoughts on","comentarios en",$content);
 return $content;
}
