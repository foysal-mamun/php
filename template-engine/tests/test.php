<?php

// Autoload files using Composer autoload
require_once __DIR__ . '/../vendor/autoload.php';

use TemplateEngine\CustomTemplateEngine;

$eng = new CustomTemplateEngine();

// test by passing array
echo $eng->render("../views/test.html", array(
	"title" => "Testing template engine", "name" => "lifo array", "email" => "lifo_array@yahoo.com"
));

$object = new StdClass;
$object->name = "lifo obj";
$object->email = "lifo-obj@yahoo.com";
$object->title = "Testing template engine";

// test by object
echo $eng->render("../views/test.html", $object);