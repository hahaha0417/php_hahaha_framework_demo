<?php

// --------------------------------------------------------------------------
// Web Front
// --------------------------------------------------------------------------

/*
// 可以這樣寫，但是會多一點消耗(多載入\ha\Route)，且會失去彈性
\ha\Route::Group(
    "/",
    [
        'prefix' => '',
        'middleware' => ['web'],
        'namespace' => '\\hahaha\\controller'
    ],
    function($route){
        // $route就是\hahahalib\hahaha_route::Instance()
        // 這樣也行
        \ha\Route::Get("/")->Controller("index_controller", "Index");	
        \ha\Route::Get("/layout")->Controller("index_controller", "Index_Layout");
        \ha\Route::Get("/test")->Controller("index_controller", "Index_Test");
    }							
);
*/

// --------------------------------------------------------------------------
// 最好這樣寫
$route_ = \hahahalib\hahaha_route::Instance(); 

$route_->Group(
    "/",
    [
        'prefix' => '',
        'middleware' => ['web', 'web.front'],
        // hahaha_route_base已經有'\\'
        'namespace' => '\\front',
    ],
    function($route){
        // 由於Middleware我會將其merge起來，因此同路徑下的會被影響
        // 因此處理方法為，在最後節點做標記，看要怎樣處理
        // ex. $route->Get("/logout")->Controller("index_controller", "Logout");	
        // 首頁不需要登入     
           
        $route->Get("/")->Middleware([], true)->Controller("index_controller", "Index");
        $route->Get("/login")->Middleware([], true)->Controller("index_controller", "Login");		
        //
        $route->Get("/layout")->Controller("index_controller", "Index_Layout");
        $route->Get("/test")->Controller("index_controller", "Index_Test");
        // 強制登入登出，測試用        
        $route->Get("/logout")->Controller("index_controller", "Logout");	

        //
        $route->Get("/overview")->Middleware([], true)->Controller("index_controller", "Overview");
        $route->Get("/feature")->Middleware([], true)->Controller("index_controller", "Feature");

    }							
);

$route_->Group(
    "/aaa/sss/vvv",
    [
        'prefix' => 'web',
        'middleware' => [],
        'namespace' => ''
    ],
    function($route){
        
        $route->Group(
            "/aaa/sss/vvv",
            [
                'prefix' => '/web',
                'middleware' => [],
                'namespace' => ''
            ],
            function($route){	                
                $route->Get("/")->Controller("index_controller", "Index1");					
            }				
        );
    }							
);



$route_->Group(
    "/ha[aaa]/sss/vvv",
    [
        'prefix' => 'web',
        'middleware' => [],
        'namespace' => ''
    ],
    function($route){
    
        
        $route->Group(
            "/ha[aaa]/sss/vvv/ccc",
            [
                'prefix' => '/web',
                'middleware' => [],
                'namespace' => ''
            ],
            function($route){	
                $route->Get("/")->Controller("index_controller", "Index2");					
            }				
        );
        
    }							
);
