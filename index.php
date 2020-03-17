<?php

// load every thigns installed 
require './vendor/autoload.php';

use Cocur\Slugify\Slugify;
$slugify = new Slugify();

echo $slugify->slugify('Hello world!');