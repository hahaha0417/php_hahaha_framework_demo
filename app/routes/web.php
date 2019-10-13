<?php

// --------------------------------------------------------------------------
// Web
// --------------------------------------------------------------------------
$route = \hahahalib\hahaha_route::Instance(); 
$route->Group(
    "/",
    [
        'prefix' => '',
        'middleware' => ['web'],
        'namespace' => '\hahaha\controller'
    ],
    function($route){
        $route->Get("/")->Controller("index_controller", "Index");	
    }							
);



$route->Group(
    "/aaa/sss/vvv",
    [
        'prefix' => 'web',
        'middleware' => ['web'],
        'namespace' => '\hahaha'
    ],
    function($route){
        
        $route->Group(
            "/aaa/sss/vvv",
            [
                'prefix' => '/web',
                'middleware' => ['web1', 'web'],
                'namespace' => '\controller'
            ],
            function($route){	
                
                $route->Get("/")->Controller("index_controller", "Index1");					
            }				
        );

        
    }							
);



$route->Group(
    "/ha[aaa]/sss/vvv",
    [
        'prefix' => 'web',
        'middleware' => ['web'],
        'namespace' => '\hahaha'
    ],
    function($route){
    
        
        $route->Group(
            "/ha[aaa]/sss/vvv/ccc",
            [
                'prefix' => '/web',
                'middleware' => ['web1', 'web'],
                'namespace' => '\controller'
            ],
            function($route){	
                $route->Get("/")->Controller("index_controller", "Index2");					
            }				
        );
        
    }							
);



