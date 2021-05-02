<?php

define("DS", DIRECTORY_SEPARATOR);
define("TPL", realpath(dirname(__FILE__)) . DS . "templates");
define("CSS", realpath(dirname(__FILE__)) . DS . "styles" . DS . "css");
define("JS", realpath(dirname(__FILE__)) . DS . "styles" . DS . "js");

require_once TPL . DS . "header.php";
if(!isset($noNav)) {
	require_once TPL . DS . "navbar.php";
}











