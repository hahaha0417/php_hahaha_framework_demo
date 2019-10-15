<?php

/*
全域變數，一定要有Instance()
靜態用法，另外寫class用(3層式作法(1 static 2 public 3 kernel))
要附加，extends \ha::Log -> \he::Log， & \ha::ha_Log -> \he::he_Log自己設計
ex Log::Error("xxx");
*/
class ha
{
	use \hahahalib\hahaha_instance_trait;
	
	// 為求快，當找到時，reference instance存成變數，這樣下次可以直接使用，但是會有物件釋放問題，會指向null
	// 因此Instance Release後，請下Update();，將指向NULL的變數，移除
	// 如果到處Release Instance，管理怕亂則規定統一在一個地方Release Instance，全部Release後下Update
		
	function __construct()
	{
		
	}	
	
	public static $Mapping_List_ = NULL;
	
	public function __get($name)
	{
		// 有用到才初始對應表
		if(!self::$Mapping_List_)
		{
			$this->Get_Mapping();
		}	
			
		if(empty($this->$name))
		{
			$class = &self::$Mapping_List_[$name];
			if(!empty($class))
			{
				$this->$name = $class::Instance();
			}
			else
			{
				throw new \Exception("沒有ha變數$" . $name);
			}
		}
		
		return $this->$name;
	}
	
	public function Get_Mapping()
	{
		// Mapping $_SERVER
		self::$Mapping_List_ = [
			'Server' => "\hahahalib\hahaha_external_variable_server"
		];	
	}	
	
	public function Update()
	{
		foreach(self::$Mapping_List_ as $key => &$class)
		{
			if($class::$Instance_ == NULL)
			{
				unset($this->$key);
			}
		}
	}
}