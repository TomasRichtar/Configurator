<?php
// Allow from any origin
if (isset($_SERVER['HTTP_ORIGIN'])) {
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Max-Age: 86400');    // cache for 1 day
}

// Directory where your files are located
$dir = "."; // Current directory

$file_list = scandir($dir);
sort($file_list);
foreach($file_list as $file) {
    if ($file !== '.' && $file !== '..') {
        echo $file . "\n";
    }
}
?>
