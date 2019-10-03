<?php

namespace hahahalib;

/*
備註 : 
sub domain有空再弄(參考laravel)
先做簡易比對，正規比對有空再做，原則上不用，因為我覺得他太慢了，浪費效能
一樣像Parameter_Style_一樣方式使用
*/
class hahaha_route
{
	use \hahahalib\hahaha_instance_trait;
	
	// --------------------------------------------------------------------------
	// Property
	// --------------------------------------------------------------------------
		
	// Url 前綴	
	public $Prefix = NULL;
	// 中間層
	public $Middleware = NULL;
	// Class的Namesapce前綴
	public $Namespace = NULL;
	// --------------------------------------------------------------------------
	// 定義 
	// --------------------------------------------------------------------------
	// Release將其換成數字加速
	const CONSTANT_ITEM = 'Item';
	const CONSTANT_GROUP = 'Group';
	
	// --------------------------------------------------------------------------
	// 
	// --------------------------------------------------------------------------
	// 參數前半
	public $Parameter_Prefix_ = "";
	// 參數後半
	public $Parameter_Postfix_ = "";
	// 參數前半
	public $Find_Prefix_ = false;
	// 參數後半
	public $Find_Postfix_ = false;
	// 空白Token
	public $Token_Blank_ = NULL;
	// 展開節點
	public $Token_Node_ = NULL;
	// 任意節點
	public $Token_All_Node_ = NULL;
	// 使用參數路徑
	public $Use_Parameter_ = false;
	// 路徑
	public $Uri_ = NULL;
	// Decode 路徑
	public $Uri_Decode_ = NULL;
	// 路徑處理完Token
	public $Uri_Token_ = [];
	// 略過空格
	public $Pass_Space_ = false;
	// --------------------------------------------------------------------------
	// 暫存
	// --------------------------------------------------------------------------
	public $Uri_Temp_ = "";
	
	// --------------------------------------------------------------------------
	// 
	// --------------------------------------------------------------------------
	//Url Node
	public $Nodes_ = [];
	
	function __construct()
	{
			
	}
	
	// --------------------------------------------------------------------------
	// 設定 - 為求快及安全，用function & reference
	// --------------------------------------------------------------------------
	public function Set_Uri(&$uri)
	{	
		$this->Uri_ = $uri;	
	}

	public function &Get_Uri()
	{
		return $this->Uri_;
	}	
	
	public function &Get_Uri_Token()
	{
		return $this->Uri_Token_;
	}
	
	/*
	trim left & right space
	*/
	public function Pass_Space($pass = true)
	{	
		$this->Pass_Space_ = $pass;	
	}
	
	// --------------------------------------------------------------------------
	// 設定
	// --------------------------------------------------------------------------
	public function Parameter_Style($prefix, $postfix)
	{
		$this->Parameter_Prefix_ = $prefix;
		$this->Parameter_Postfix_ = $postfix;
		
		$this->Find_Prefix_ = $this->Parameter_Prefix_ != "";
		$this->Find_Postfix_ = $this->Parameter_Postfix_ != "";
		
		if(!$this->Find_Prefix_ && !$this->Find_Postfix_)
		{
			$this->Token_Blank_ = md5(microtime()) . '_Blank';
			$this->Token_Node_ = md5(microtime()) . '_Node';
			$this->Token_All_Node_ = md5(microtime()) . 'All_Node';
			$this->Use_Parameter_ = false;
		}
		else
		{
			$this->Token_Blank_ = $this->Parameter_Prefix_ . "Blank" . $this->Parameter_Postfix_;
			$this->Token_Node_ = $this->Parameter_Prefix_ . "Node" . $this->Parameter_Postfix_;
			$this->Token_All_Node_ = $this->Parameter_Prefix_ . "All_Node" . $this->Parameter_Postfix_;
			$this->Use_Parameter_ = true;
		}
	}
	
	// --------------------------------------------------------------------------
	// 路由
	// --------------------------------------------------------------------------
	/*
	Group 群組
	$callback function($route){}
	*/
	public function Group($url, $parameter, $callback)
	{
		if(isset($parameter["prefix"]))
		{
			$this->Prefix = $parameter["prefix"];	
		}
		if(isset($parameter["middleware"]))
		{
			$this->Middleware = $parameter["middleware"];	
		}
		if(isset($parameter["namespace"]))
		{
			$this->Namespace = $parameter["namespace"];	
		}
				
		$token_ = explode('/', $this->Uri_Temp_ . $url);
		
		// 找到node
		$last_ = count($token_) - 1;
		
		$node_ = &$this->Node_;
		foreach($token_ as $key => &$token)
		{
			if($key == 0 && $this->Uri_Temp_ == "")
			{
				// 根目錄，略過第一個
				continue;
			}
			else if($key == $last_ && $token == "")
			{
				// 最後是"/"，略過
				break;
			}
						
			if($token == "")
			{
				// 中間token空白，建立空白節點，也就是我的路徑是可以/xxx//xxx/
				$node_[$this->Token_Blank_] = [];
				$node_ = &$node_[$this->Token_Blank_];
			}
			else
			{				
				// 檢查是否是參數
				if($this->Use_Parameter_)
				{
					$pos_start_ = false;
					$pos_end_ = false;
					$temp_token_ = trim($token);
					if($this->Find_Prefix_ && $this->Parameter_Prefix_  != "")
					{
						$pos_start_ = mb_strpos($token, $this->Parameter_Prefix_, 0);
						if($pos_start_ !== false)
						{		
							// 必須等於最前，參數外面不能有東西
							$ok_ = mb_strpos($temp_token_, $this->Parameter_Prefix_, 0) == 0;
							if(!$ok_)
							{
								$pos_start_ = false;
							}
						}
					}
					if($this->Find_Postfix_ && $this->Parameter_Postfix_  != "")
					{
						$pos_end_ = mb_strpos($token, $this->Parameter_Postfix_, -1);
						if($pos_end_ !== false)
						{
							// 必須等於最後，參數外面不能有東西
							$ok_ = mb_strpos($temp_token_, $this->Parameter_Postfix_, -1) == (mb_strlen($temp_token_) - 1);
							if(!$ok_)
							{
								$pos_start_ = false;
							}
						}
					}
							
					$parameter_ = false;
					if($this->Find_Prefix_ && $this->Find_Postfix_ && $pos_start_ !== false && $pos_end_ !== false)
					{
						$length_ = mb_strlen($this->Parameter_Prefix_);
						$name_ = mb_substr($token, $pos_start_ + $length_, $pos_end_ - $pos_start_ - $length_);
						$parameter_ = true;
					}
					else if(!$this->Find_Prefix_ && $this->Find_Postfix_ && $pos_start_ === false && $pos_end_ !== false)
					{
						$name_ = mb_substr($token, 0, $pos_end_);
						$parameter_ = true;
					}
					else if($this->Find_Prefix_ && !$this->Find_Postfix_ && $pos_start_ !== false && $pos_end_ === false)
					{
						$length_ = mb_strlen($this->Parameter_Prefix_);
						$pos_end_ = mb_strlen($token);
						$name_ = mb_substr($token, $pos_start_ + $length_, $pos_end_ - $pos_start_ - $length_);
						$parameter_ = true;
					}
					else
					{
						$name_ = &$token;
					}
					
					if($parameter_)
					{
						if(empty($node_[$this->Token_All_Node_]))
						{
							$node_[$this->Token_All_Node_] = [];
						}
						$node_ = &$node_[$this->Token_All_Node_];
					}
					else
					{
						if(empty($node_[$name_]))
						{
							$node_[$name_] = [];
						}
						$node_ = &$node_[$name_];
					}
				}
				else
				{
					// 有節點
					if(empty($node_[$token]))
					{
						$node_[$token] = [];
					}
					$node_ = &$node_[$token];
				}
			}
			
			
		}
		
		$node_[$this->Token_Node_] = [
			"Type" => self::CONSTANT_GROUP,
			"Parameter" => $parameter,
			"Callback" => $callback
		];
		
		//$this->Use_Parameter_ = true;
		//
		echo "<pre>";
		var_dump($this->Node_);
		
		
		return $this;
	}	
	
	/*
	設定Controller
	*/
	public function Controller($controller, $action)
	{
		return $this;
	}	
	
	/*
	設定Function
	$route->Get('/feature')->Route(
		function($route){
			$route->Function(IndexController::Instance(),'index')
		});
	*/
	public function Function($controller, $action)
	{
		return $this;
	}
	
	/*
	設定Callback
	function(...$param){}
	*/
	public function Callback($callback)
	{
		return $this;
	}	
	
	/*
	設定Route
	function($route){}	
	*/
	public function Route($callback)
	{
		return $this;
	}	
	
	// --------------------------------------------------------------------------
	// Name路由
	// --------------------------------------------------------------------------
	/*
	設定Name Route
	因為效率問題，所以一樣用array這樣就不需要parser，因為要對齊，所以[]在前面
	Name([], "index")
	Name(["web", "front"], "index")
	Name(["web", "front", 'contact'], "index")
	*/
	public function Name($nodes, $name)
	{
		return $this;
	}	
	
	/*
	搜尋Group名稱，執行Callback
	search([
		[[], ['profile']],
		[['a', 'b'], []],
		[['a', 'b'], ['profile']],
		[['a', 'c'], ['xxx', 'ccc']],
	])
	沒指定search，用到時callback全展開(我會登記處理順序，避免亂掉)，有指定則先找指定的group，沒有再全找
	*/
	public function Search($nodes, $names)
	{
		return $this;
	}	
	
	/*
	這裡記得要做search功能，避免找不到name
	Route::redirect()
		// 沒指定search，用到時callback全展開(我會登記處理順序，避免亂掉)，有指定則先找指定的group，沒有再全找
		->search([
			[['a', 'b'], ['profile']],
			[['a', 'c'], ['xxx']],
		])
		->name(['a', 'b'], 'profile', );
	
	})
	->name(['a', 'b'], 'g1');
	// subdomain有空再補，現在不需要
	*/
	
	// --------------------------------------------------------------------------
	// 方法設定
	// --------------------------------------------------------------------------
	/*
	Get 接收Get
	*/
	public function Get($url)
	{
		return $this;
	}	
	
	/*
	Post 接收Post
	*/
	public function Post($url)
	{
		return $this;
	}
	
	/*
	Put 接收Put
	*/
	public function Put($url)
	{
		return $this;
	}
	
	/*
	Delete 接收Delete
	*/
	public function Delete($url)
	{
		return $this;
	}
	
	/*
	Patch 接收Delete
	*/
	public function Patch($url)
	{
		return $this;
	}


	// --------------------------------------------------------------------------
	// 執行
	// --------------------------------------------------------------------------
	/*
	執行Route
	// 使用方法	
	// 設定路徑
	*/
	public function Run()
	{
		// --------------------------------------------------------------------------
		// token查找
		// 階層式查找(Token)
		// 為求快，絕對的先找，找到了就成功
		// 查找規則 : 絕對(xxx) > 參數(ha[]) > 可變(...) 
		// 參數外不可有東西，不然視為不是參數
		// --------------------------------------------------------------------------
		// 正規表示式不加，因為要遍歷所有正規表示式判斷，那太慢了
		// 而且為什麼不先找到正確處理節點，然後在觸發的callback裡面寫正規表示式切換到想要的Cotroller?
		// 所以正規表示式不加入hahaha_route架構，請在callback or controller處理正規表示式的東西
		// --------------------------------------------------------------------------
		
		
	}
	
	/*
	執行Redirect，設定好，在run結束時，跳轉
	*/
	public function Redirect($url)
	{		
		return $this;
	}	

	// --------------------------------------------------------------------------
	// 處理
	// --------------------------------------------------------------------------
	public function Deal_Uri()
	{		
		// 為求快，暫時不打算將這段寫成Library使用，避免多include檔案，除非本身要include很多檔案，不然盡量寫在一起
		$this->Uri_Decode_ = urldecode($this->Uri_);
		$this->Uri_Token_ = explode('/', $this->Uri_Decode_);
		// urlenecode應該是因為怕有Inject攻擊，但我這邊自己處理，不會執行什麼指令，所以直接parse token比對
		// trim space
		if($this->Pass_Space_)
		{
			$this->Trim_Uri_Token_Space();
		}
		// 沒要設計很複雜，大概laravel那樣即可，所以如需細部parser參數，則自己讀出$Uri_Token_處理

	}
	
	public function Trim_Uri_Token_Space()
	{	
		foreach($this->Uri_Token_ as &$token)
		{
			$token = trim($token);
		}
	}
	
	
	
	
	
	
}