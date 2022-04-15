<?php
define('BASEURL', 'http://localhost/phpmvcmain/public/');

// DB
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'db_mvc');

$server = mysqli_connect("localhost", "root", "", "db_mvc");

if (!$server) {
    echo "Maaf, Gagal tersambung dengan server !";
}
