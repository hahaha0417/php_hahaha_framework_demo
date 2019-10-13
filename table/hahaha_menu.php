<?php

namespace hahaha;

/*
設計上，menu主要用來reference 重要物件，參數或array
可以先在這邊初始化，或是需要傳東西時reference到變數

可以用reference or copy array
重點 : reference比較快
如是php-fpm - 則使用前要先Release
如是php-fpm - 則使用前要先Release，這可能是上次的資料
*/
class hahaha_menu
{	
	use hahaha_instance_trait;

	function __construct()
	{
		$this->Initial();
	}
	
	public function Initial()
	{
		
	}

	
}


