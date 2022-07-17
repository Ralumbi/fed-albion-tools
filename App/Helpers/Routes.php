<?php

$route = new Router();

$route->Route('/', function() {
    Templates::Page('header');
    Templates::Page('index');
    Templates::Page('footer');
});

$route->Route('/about', function() {
    Templates::Page('header');
    Templates::Page('about');
    Templates::Page('footer');
});

$route->Route('/contact', function() {
    Templates::Page('header');
    Templates::Page('contact');
    Templates::Page('footer');
});

$route->Route('/lookup', function() {
    Templates::Page('header');
    Templates::Page('lookup');
    Templates::Page('footer');
});


$action = $_SERVER['REQUEST_URI'];

$route->Dispatch($action);