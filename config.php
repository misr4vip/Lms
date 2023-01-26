<?php 
define("ROOT", $_SERVER["DOCUMENT_ROOT"].'/LMS');
define("HTTP_PATH_ROOT", isset($_SERVER["HTTP_HOST"]) ? 'http://'.$_SERVER["HTTP_HOST"].'/LMS' : (isset($_SERVER["SERVER_NAME"]) ? 'http://'.$_SERVER["SERVER_NAME"].'/project' : '_UNKNOWN_'.'/project'));


?>