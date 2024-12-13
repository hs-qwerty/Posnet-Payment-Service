<?php

require __DIR__ . '/../vendor/autoload.php';

use Slvler\Tmdb\Tmdb;
use Slvler\Tmdb\Factory;

$request = Tmdb::factory()
    ->withBaseUrl('https://api.themoviedb.org/3')
    ->withHttpHeader('Authorization', 'Bearer xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx')
    ->withPath('movie/11')
    ->make();

print_r($request);

