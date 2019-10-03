<?php

namespace hahaha;

/*
設計上，system_setting必須載入
*/
class hahaha_system_setting
{
	use hahaha_instance_trait;

	function __construct($initial = true)
	{		
		if($initial)
		{
			Initial();
		}
	}
		
	public function Initial()
	{
		// 不能用這個hahaha_system_setting::Instance()，會無限迴圈
		if(method_exists($this, "Initial_Ha"))
		{
			$this->Initial_Ha($this);
		}
		if(hahaha_system_setting::Instance()->develop->default && method_exists(hahaha_system_setting_default::Instance(), "Initial_Ha"))
		{
			hahaha_system_setting_default::Instance()->Initial_Ha($this);
		}
		if(hahaha_system_setting::Instance()->develop->local && method_exists(hahaha_system_setting_local::Instance(), "Initial_Ha"))
		{
			hahaha_system_setting_local::Instance()->Initial_Ha($this);
		}
	}
	
	/*
	初始化腳本
	*/
	public function Initial_Ha($system_setting)
	{
		$system_setting->debug = true;
		// --------------------------------------------------------------------------
		// 不可覆蓋
		// --------------------------------------------------------------------------
		// 因為我不想檢查檔案，所以檔案必須存在
		$system_setting->develop = new\stdClass;
		$system_setting->develop->default = true;
		$system_setting->develop->local = true;
		// --------------------------------------------------------------------------
		// 可覆蓋
		// --------------------------------------------------------------------------
		$system_setting->global = new \stdClass;
		
	}	
	
}

