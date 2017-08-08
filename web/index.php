<?php

require_once dirname(__FILE__) . '/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpFoundation\Response;

$app = new Silex\Application();

$app->mount('/hello', new Aina\Provider\HelloProvider());
$app->mount('/hai', new Aina\Provider\HelloProvider());

$app->run();
