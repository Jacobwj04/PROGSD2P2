<?php

define("PRIVATE__PATH", dirname(__FILE__));
define("PROJECT__PATH", dirname(PRIVATE__PATH));
define("SHARED__PATH", PRIVATE__PATH . '/shared');
define("DATABASE_PATH", PRIVATE__PATH . '/db');

include SHARED__PATH . '/function.php';
