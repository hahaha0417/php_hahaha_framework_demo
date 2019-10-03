<?php

namespace hahaha;

class hahaha_route_base
{
	function __construct()
	{

	}
	
	public function Run()
	{
		$global = \hahaha\hahaha_global::Instance();
		
		if($global->Route->Default)
		{
			$this->Run_Default();
			
		}
		else
		{
			$this->Run_Custom();
		}
		
		return $this;
	}
		
	/*
	預設路由
	*/
	public function Run_Default()
	{
		// 如有要換router，請在這裡改，framework底下的不要改，避免不好同步
		$route = \hahahalib\hahaha_route::Instance();
		
		// 參數樣式，必須有，不然不找參數
		$route->Parameter_Style("ha[", "]");
		
		// 用lite 加快速度
		$server = \hahahalib\external\lite\hahaha_external_variable_server_lite::Instance();
		$global = \hahaha\hahaha_global::Instance();
		// $server使用魔術方法_GET，將其初始化
		$server->Request_Uri;		
		// 設定路徑
		$route->Set_Uri($server->Request_Uri);
		// pass space
		$route->Pass_Space($global->Route->Pass_Space);
		// 先處理路徑，因為可能其他人需要Uri Token自己處理，而且就我流程，前面處理和Run時處理是一樣意思
		$route->Deal_Uri();
				
		$this->Route();
						
		// 跑Route
		$route->Run();
	}
	
	public function Route()
	{
		$route = \hahahalib\hahaha_route::Instance();
		// web
		$route->Group(
			"/aaa/ha[sss]/vvv",
			[
				"prefix" => "web",
				"middleware" => ["web"],
				"namespace"=> "\\hahaha\\route\\web"
			],
			function($route){
				require_once hahaha_application::Instance()->Root_ . '/app/routes/web.php';
			}				
		);
		
		// api
		$route->Group(
			"/aaa/ha[sss]/vvvv",
			[
				"prefix" => "api",
				"middleware" => ["api"],
				"namespace"=> "\\hahaha\\route\\api"
			],
			function($route){
				require_once hahaha_application::Instance()->Root_ . '/app/routes/api.php';
			}				
		);
	}
	
}
