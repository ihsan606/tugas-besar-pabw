<?php

require '../vendor/autoload.php';
use App\models\Category;

$categories = Category::all();

define('BASEURL', 'http://localhost:8080/tugas-besar-pabw/public');
// define('BASEURL', 'http://rezerva.test:4040/tugas-besar-pabw/public');
// define('BASEURL', 'http://localhost:/tugas-besar-pabw/public');
// define('BASEURL', 'https://rezerva.my.id/public');
