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
        // hahaha line bot
        // $route->Get("/bot/hahaha/callback")->Controller("hahaha\\hahaha_controller", "Callback");	
        $route->Post("/bot/hahaha/callback")->Controller("hahaha\\hahaha_controller", "Callback");	
        // 通用line bot
        $route->Get("/bot/common/callback/ha[user]/ha[callback]/ha[setting]")->Controller("common\\hahaha_controller", "Callback");	
        $route->Post("/bot/common/callback/ha[user]/ha[callback]/ha[setting]")->Controller("common\\hahaha_controller", "Callback");
        
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
