<?php

namespace hahaha;

/*
設計上，option不能在runtime修改
*/
class hahaha_option
{
	use hahaha_instance_trait;

	function __construct()
	{
		$this->Initial();
	}
		
	public function Initial()
	{
		// 不能用這個hahaha_system_setting::Instance()，會無限迴圈
		if(method_exists($this, "Initial_Ha"))
		{
			$this->Initial_Ha($this);
		}
		if(hahaha_system_setting::Instance()->develop->default && method_exists(hahaha_option_default::Instance(), "Initial_Ha"))
		{
			hahaha_option_default::Instance()->Initial_Ha($this);
		}
		if(hahaha_system_setting::Instance()->develop->local && method_exists(hahaha_option_local::Instance(), "Initial_Ha"))
		{
			hahaha_option_local::Instance()->Initial_Ha($this);
		}	
	}
	
	/*
	初始化腳本
	*/
	function Initial_Ha($option)
	{
	}
}


