<?php

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

// Home
Breadcrumbs::register('home', function ($trail) {
    $trail->push('Home', route('home'));
});
// Home > About
Breadcrumbs::register('desc', function ($trail, $var) {
    $trail->parent('home');
    $trail->push($var->model_name, route('desc',$var->slug));
});