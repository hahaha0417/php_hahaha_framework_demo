<?php

// --------------------------------------------------------------------------
// Web Backend
// --------------------------------------------------------------------------
$route_ = \hahahalib\hahaha_route::Instance(); 

$route_->Group(
    "/backend",
    [
        'prefix' => '',
        'middleware' => ['web','web.backend'],				
        'namespace' => '\\hahaha\\controller',
        'node' => \hahahalib\hahaha_route::CONSTANT_ROOT,
    ],
    function($route){				
        //require hahaha_application::Instance()->Root_ . '/app/http/routes/web.php';
        $route->Get("/")->Controller("index_controller", "Index");
    }							
);