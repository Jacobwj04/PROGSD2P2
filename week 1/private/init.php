<?php

define("PRIVATE__PATH", dirname(__FILE__));
define("PROJECT__PATH", dirname(PRIVATE__PATH));
define("SHARED__PATH", PRIVATE__PATH . '/shared');
echo SHARED__PATH;

$root = substr($_SERVER['SCRIPT_NAME'],
    0,
    strpos($_SERVER['SCRIPT_NAME'], '/public') + 7);
define("ROOT_URL", $root);

function url_path($path) {
    if($path[0] != '/') {
        $path = "/" . $path;
    }
    return ROOT_URL . $path;
}

