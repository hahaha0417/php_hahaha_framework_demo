<?php

namespace hahaha;

/*
// 由於流程強調盡量少include，所以在進入客製化程式前，不要用\ha\XXX快捷用法，那不是給架構者用的
*/
class hahaha_application
{
	/*
	物件Handle
	*/
	public static $Instance_ = NULL;
	
	public $Root_ = NULL;
	
	function __construct($root)
	{
		$this->Root_ = $root; 
	}
	
	/*
	單例模式
	*/
	public static function Instance()
	{
		if(!self::$Instance_)
		{
			self::$Instance_ = new hahaha_application(
				realpath(__DIR__.'/../')
			);
		}
		
		return self::$Instance_;
	}
	
	/*
	啟動程序
	*/
	public function Run()
	{
		try
		{
			// 初始化程序
			$this->Initial();
			// 系統參數，盡量少(其實有opcache，很多也沒關係)
			hahaha_system_setting::Instance()->Initial();
	
			// 重置
			$this->Reset();
	
			// 啟動，有要靜態載入，加在這裡
			hahaha_bootstrap::Instance()->Run();
			
			// 由於設計上，採用單例模式，因此需要時再用單例(Instance())初始化，所以流程上不須預先載入太多東西
			//
			if(\hahahalib\hahaha_cli_function::Is_Cli())
			{
				// Console
			}
			else
			{
				// Web
				hahaha_route::Instance()->Initial()->Run();
			}	
		}	
		catch(\Exception $e)
		{		
			if(hahaha_global::Instance()->Debug->Enabled)
			{
				echo "<pre>";
			}
			if(\hahahalib\hahaha_cli_function::Is_Cli())
			{
				echo "Exception : " . $e->getMessage() . PHP_EOL;	
			}
			else
			{
				// Web
				if(hahaha_global::Instance()->View->Render->Enabled)
				{
					// 有空要弄成頁面					
					echo "Exception : " . $e->getMessage() . PHP_EOL;				
				}
				else
				{
					echo "Exception : " . $e->getMessage() . PHP_EOL;		
				}
				

			}	
			if(hahaha_global::Instance()->Debug->Enabled)
			{
				var_dump($e->getTrace());
			}
		}		
	}
	
	/*
	每次流程都必須重置的東西
	*/
	public function Reset()
	{
		hahaha_global::Instance()->Reset();
		
	}
	
	/*
				
	*/
	public function Initial()
	{
		
	}

}


