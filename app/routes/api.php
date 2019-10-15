<?php

// --------------------------------------------------------------------------
// Api
// --------------------------------------------------------------------------
// Line
$route = \hahahalib\hahaha_route::Instance(); 

$route->Group(
    "/1.0/line",
    [
        'prefix' => '',
        'middleware' => ['web'],
        'namespace' => 'hahaha\\api\\line\\bot'
    ],
    function($route){
        // $route->Get("/bot/hahaha/callback")->Controller("hahaha_controller", "Callback");	
        $route->Post("/bot/hahaha/callback")->Controller("hahaha_controller", "Callback");	
    }							
);

// Facebook
$route->Group(
    "/1.0/facebook",
    [
        'prefix' => '',
        'middleware' => ['web'],
        'namespace' => 'hahaha\\api\\facebook\\bot' 
    ],
    function($route){
        $route->Get("/bot/hahaha/callback")->Controller("hahaha_controller", "Callback");	
        $route->Post("/bot/hahaha/callback")->Controller("hahaha_controller", "Callback");
    }							
);