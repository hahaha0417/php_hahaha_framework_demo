<?php

namespace hahahalib;

/*
...有空再寫，目前用不到
*/
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
	public $Middleware = [];
	// Class的Namesapce前綴
	public $Namespace = NULL;
	// 路由覆蓋
	public $Overwrite = false;
	// --------------------------------------------------------------------------
	// 定義 
	// --------------------------------------------------------------------------
	// Release將其換成數字加速
	const CONSTANT_METHOD = 'Method';
	const CONSTANT_GROUP = 'Group';

	const CONSTANT_Method_Controller = 'Controller';
	const CONSTANT_Method_Function = 'Function';
	const CONSTANT_Method_Callback = 'Callback';
	const CONSTANT_Method_Route = 'Route';
	
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
	// 展開節點(xxx/xxx) - 設定資訊，callback資訊在這
	public $Token_Node_ = NULL;
	// 任意節點(ex. ha[xxx])
	public $Token_All_Node_ = NULL;
	// 多個任意節點(...)
	public $Token_Multiple_All_Node_ = NULL;
	// 節點參數
	public $Token_Parameter_ = NULL;
	
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
	// 目前Group所在的Node
	public $Node_Now_ = NULL;
	
	// --------------------------------------------------------------------------
	// 暫存
	// --------------------------------------------------------------------------
	public $Uri_Temp_ = "";
	// Add用，因為函式不可以接reference回來
	public $Node_Temp_ = NULL;
	public $Method_Node_Temp_ = NULL;
	public $Method_Temp_ = NULL;
	
	
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
			$this->Token_All_Node_ = md5(microtime()) . '_All_Node';		
			$this->Token_Multiple_All_Node_ = md5(microtime()) . '_Multiple_All_Node';		
			$this->Token_Parameter_ = md5(microtime()) . '_Parameter';
			$this->Use_Parameter_ = false;
		}
		else
		{
			$this->Token_Blank_ = $this->Parameter_Prefix_ . "Blank" . $this->Parameter_Postfix_;
			$this->Token_Node_ = $this->Parameter_Prefix_ . "Node" . $this->Parameter_Postfix_;
			$this->Token_All_Node_ = $this->Parameter_Prefix_ . "All_Node" . $this->Parameter_Postfix_;
			$this->Token_Multiple_All_Node_ = $this->Parameter_Prefix_ . "Multiple_All_Node" . $this->Parameter_Postfix_;
			$this->Token_Parameter_ = $this->Parameter_Prefix_ . "Parameter" . $this->Parameter_Postfix_;
			$this->Use_Parameter_ = true;
		}

	}
	
	// --------------------------------------------------------------------------
	// 路由
	// --------------------------------------------------------------------------
	/*
	新增Node
	node reference
	*/
	public function Add(&$url, &$parameter, &$callback, $type)
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

		if($this->Node_Now_)
		{
			$node_ = &$this->Node_Now_;			
		}
		else
		{
			$node_ = &$this->Nodes_;
			if(empty($node_))
			{
				// 第一次，初始化
				$node_[$this->Token_Parameter_] = [					 
					"Node_Find" => false,
					"All_Node_Find" => false,
					"Multiple_All_Node_Find" => false,
					// 設定
					'Expand' => false,
				];
			}			
		}

		if($type == self::CONSTANT_GROUP)
		{
			$token_ = explode('/', $this->Prefix . $url);
		}
		else if($type == self::CONSTANT_METHOD)
		{
			// 不用加前綴
			$token_ = explode('/', $url);
		}

		// 找到node
		$last_ = count($token_) - 1;

		if($token_ > 0 && $token_[0] == "")
		{
			unset($token_[0]);
			// key沒變，不需要減1
			//$last_--;
		}
		
		foreach($token_ as $key => &$token)
		{
			if($key == $last_ && $token == "")
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
							$node_[$this->Token_All_Node_] = [
								$this->Token_Parameter_ => [
									"Node_Find" => false,
									"All_Node_Find" => false,
									"Multiple_All_Node_Find" => false,
									// 設定
									'Expand' => false,
								]
							];
						}
						$node_ = &$node_[$this->Token_All_Node_];
					}
					else
					{
						if(empty($node_[$name_]))
						{
							$node_[$name_] = [
								$this->Token_Parameter_ => [
									"Node_Find" => false,
									"All_Node_Find" => false,
									"Multiple_All_Node_Find" => false,
									// 設定
									'Expand' => false,									
								]
							];
						}
						$node_ = &$node_[$name_];
					}
				}
				else
				{
					// 有節點
					if(empty($node_[$token]))
					{
						$node_[$token] = [
							$this->Token_Parameter_ => [
								"Node_Find" => false,
								"All_Node_Find" => false,
								"Multiple_All_Node_Find" => false,
								// 設定
								'Expand' => false,
							]
						];
					}
					$node_ = &$node_[$token];
				}
			}
		}

		if($type == self::CONSTANT_GROUP)
		{
			if(!empty($node_))
			{
				$this->Node_Temp_ = &$node_;
			}
			else
			{
				unset($this->Node_Temp_);
				$this->Node_Temp_ = NULL;	
			}
		}
		else if($type == self::CONSTANT_METHOD)
		{
			if(!empty($node_))
			{				
				$this->Method_Node_Temp_ = &$node_;
			}
			else
			{
				if(!empty($this->Node_Temp_))
				{
					$this->Method_Node_Temp_ = &$this->Node_Temp_;
				}
				else
				{
					$this->Method_Node_Temp_ = &$this->Nodes_;
				}
				
			}	
		}
		
		return $this;
	}	

	/*
	Group 群組
	$callback function($route){}
	*/
	public function Group($url, $parameter, $callback)
	{				
		$this->Add($url, $parameter, $callback, self::CONSTANT_GROUP);

		// 因為不能用函式接reference，所以用變數接
		$node_ = &$this->Node_Temp_;

		if($this->Node_Now_)
		{
			if(
				$this->Overwrite ||
				(!$this->Overwrite && empty($node_[$this->Token_Node_]) )
			)
			{
				// 非第一層
				$node_now_data_ = &$this->Node_Now_[$this->Token_Node_]; 		
			
				$node_[$this->Token_Node_] = [
					// 重要參數
					'Type' => self::CONSTANT_GROUP,
					'Parameter' => $parameter,
					'Callback' => $callback,
					//
					'Prefix' => $node_now_data_['Prefix'] . $this->Prefix,
					'Middleware' => array_unique(array_merge($node_now_data_['Middleware'], $this->Middleware)),
					'Namespace' => $node_now_data_['Namespace'] . $this->Namespace,
				];	
			}					
		}	 
		else
		{
			if(
				$this->Overwrite ||
				(!$this->Overwrite && empty($node_[$this->Token_Node_]) )
			)
			{
				// 第一層
				$node_[$this->Token_Node_] = [
					// 重要參數
					'Type' => self::CONSTANT_GROUP,
					'Parameter' => $parameter,
					'Callback' => $callback,
					//
					'Prefix' => $this->Prefix,
					'Middleware' => $this->Middleware,
					'Namespace' => $this->Namespace,
				];
			}	
		}
		
		return $this;
	}	
	
	/*
	設定Controller，末端，不return
	*/
	public function Controller($controller, $action)
	{
	
		if(is_array($this->Method_Temp_))
		{
			$this->Method_Temp_['Type'] = self::CONSTANT_Method_Controller;
			$this->Method_Temp_['Controller'] = $controller;
			$this->Method_Temp_['Action'] = $action;
			// reference用unset可以清除
			unset($this->Method_Temp_);
			$this->Method_Temp_ = NULL;			
		}
	}	
	
	/*
	設定Function，末端，不return
	這是指標，所以會先建立物件，如跳Controller不要用，會漫一點
	$route->Get('/feature')->Route(
		function($route){
			$route->Function(IndexController::Instance(),'index')
			// $route->Function(xxx::Instance(),'function')
		});
	*/
	public function Function($object, $function)
	{
		if(is_array($this->Method_Temp_))
		{
			$this->Method_Temp_['Type'] = self::CONSTANT_Method_Controller;
			$this->Method_Temp_['Object'] = $object;
			$this->Method_Temp_['Function'] = $function;
			// reference用unset可以清除
			unset($this->Method_Temp_);
			$this->Method_Temp_ = NULL;	
		}
	}
	
	/*
	設定Callback，末端，不return
	function(...$param){}
	*/
	public function Callback($callback)
	{
		if(is_array($this->Method_Temp_))
		{
			$this->Method_Temp_['Type'] = self::CONSTANT_Method_Callback;
			$this->Method_Temp_['Callback'] = $callback;
			// reference用unset可以清除
			unset($this->Method_Temp_);
			$this->Method_Temp_ = NULL;	
		}
	}	
	
	/*
	設定Route
	callback : function($route){}	
	*/
	public function Route($callback)
	{
		if(is_array($this->Method_Temp_))
		{
			$this->Method_Temp_['Type'] = self::CONSTANT_Method_Callback;
			$this->Method_Temp_['Callback'] = $callback;
			// 執行時才跑callback看要做啥動作，可以動態決定執行

			// reference用unset可以清除
			unset($this->Method_Temp_);
			$this->Method_Temp_ = NULL;	
		}
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
		$this->Method("Get", $url);

		return $this;
	}	
	
	/*
	Post 接收Post
	*/
	public function Post($url)
	{
		$this->Method("Post", $url);

		return $this;
	}
	
	/*
	Put 接收Put
	*/
	public function Put($url)
	{
		$this->Method("Put", $url);

		return $this;
	}
	
	/*
	Delete 接收Delete
	*/
	public function Delete($url)
	{
		$this->Method("Delete", $url);

		return $this;
	}
	
	/*
	Patch 接收Delete
	*/
	public function Patch($url)
	{
		$this->Method("Patch", $url);

		return $this;
	}

	public function Method($method, $url)
	{
		$this->Add($url, $parameter, $callback, self::CONSTANT_METHOD);


		// 因為不能用函式接reference，所以用變數接
		$node_ = &$this->Method_Node_Temp_;

		$method_ = $this->Parameter_Prefix_ . $method . $this->Parameter_Postfix_;
		if(
			$this->Overwrite ||
			(!$this->Overwrite && empty($node_[$method_]) )
		)
		{
			// 一樣要包起，避免跟Node衝突
			$node_[$method_] = [
					
			];	
		}		

		$this->Method_Temp_ = &$node_[$method_];

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
		// 注意，從key 1開始

		// 策略為有找過的紀錄，while直到全部可能找過才結束，然後選項化決定將處理過的標記復原(PHP_FPM要Reset讓下一個用，一般的不用Reset)

		// 使用
		$this->Node_Now_ = NULL;
		// 找節點		

		// 找到的節點stack
		$nodes_ = [];
		$node_ = &$this->Nodes_;
		$nodes_index_ = 0;
		// 找到的參數
		$parameters_ = [];
		$parameters_index_ = 0;
		
		
		$n = count($this->Uri_Token_);
		for($i = 0; $i < $n; $i++)
		{	
			$token = &$this->Uri_Token_[$i];
			$node_parameter = &$node_[$this->Token_Parameter_];

			$index_ = -1;

			$find_parameter_ = false;
			// 先找自己node，所有可能			
			while(1)
			{		
				$find_node_ = false;
				
				do
				{
					$deal_node_ = false;
					if(!$node_parameter['Node_Find'])
					{
						if(!empty($node_[$token]))
						{
							// 找到
							$node_ = &$node_[$token];
							$find_node_ = true;
						}
						$deal_node_ = true;
						$node_parameter['Node_Find'] = true;					
					}
					else if(!$node_parameter['All_Node_Find'])
					{				
						if(!empty($node_[$this->Token_All_Node_]))
						{
							// 找到
							$node_ = &$node_[$this->Token_All_Node_];
							$find_node_ = true;
							$find_parameter_ = true;
						}
						$deal_node_ = true;						
						$node_parameter['All_Node_Find'] = true;
					}
					else if(!$node_parameter['Multiple_All_Node_Find'])
					{
						if(!empty($node_[$this->Token_Multiple_All_Node_]))
						{
							// 找到
							$node_ = &$node_[$this->Token_Multiple_All_Node_];
							$find_node_ = true;
							$find_parameter_ = true;
						}
						$deal_node_ = true;
						$node_parameter['Multiple_All_Node_Find'] = true;
					}				
				}				
				while(!$find_node_ && $deal_node_);
				
				// 如果找不到node
				if(!$find_node_)
				{		
					// 倒著觸發callback，找出路
					$index_ = count($nodes_) - 1;	
						
					$repeat_ = false;	
					while($index_ >= 0)				
					{										
						$target_node_ = &$nodes_[$index_];

						$target_node_parameter = &$target_node_[$this->Token_Parameter_];
						
						if(!$target_node_parameter['Expand'])
						{								
							if(!empty($target_node_[$this->Token_Node_]))
							{
								$target_node_data_ = &$target_node_[$this->Token_Node_];
								
								if(!empty($target_node_data_['Callback']))
								{
									$target_node_data_callback_ = &$target_node_data_['Callback'];														
									$target_node_data_callback_($this);
									
									// 可能有新節點重找
									$node_parameter['Node_Find'] = false;
									$node_parameter['All_Node_Find'] = false;
									$node_parameter['Multiple_All_Node_Find'] = false;
									$repeat_ = true;								
								}								
							}
							// 標記已展開Group
							$target_node_parameter['Expand'] = true;
							if($repeat_)
							{
								break;
							}
							
						}	

						// 沒找到則繼續找上一個節點
						$index_--;
					}
					
					if($repeat_)
					{
						continue;
					}
					
				}	

				// 繼續處理
				break;	
			}

			if(!$find_node_)
			{
				$last_ = $nodes_index_ - 1;
				
				// 刪除最後元素					
				unset($nodes_[$last_]);	
				
				$nodes_index_--;
				$last_--;
				
				if($last_ == -1)
				{				
					$node_ = $this->Nodes_;
				}	
				else				
				{					
					$node_ = &$nodes_[$last_];	
				}	
								
				$this->Node_Now_ = &$node_;	
				$i -= 2;
				// 參數取出
				$parameters_index_--;
				unset($parameters_[$parameters_index_]);
				
				if($i < -1)
				{
					// 沒了，跳出
					break;
				}
				continue;			
			}
			
			
			// 堆疊
			$nodes_[$nodes_index_] = &$node_;
			$nodes_index_++;
			$this->Node_Now_ = &$node_;	
			// 參數存入
			if($find_parameter_)
			{
				$parameters_[$parameters_index_] = &$token;
				$parameters_index_++;
			}
			else
			{
				$parameters_[$parameters_index_] = $this->Token_Blank_;
				$parameters_index_++;
			}

			
		}

		if(!$find_node_)
		{
			throw new \Exception("沒有找到url");			
		}

		$this->Node_Now_ = &$node_;
		
		// 本身 callback一定要執行，不然底下要是有Get("/")，則找不到
		if(!empty($node_[$this->Token_Node_]))
		{
			$node_data_ = &$node_[$this->Token_Node_];
			if(!empty($node_data_['Callback']))
			{
				$node_data_callback_ = &$node_data_['Callback'];
									
				$node_data_callback_($this);
				// 可能有新節點重找
				$node_parameter['Expand'] = true;								
			}		
		}
		
		// 找到節點，執行		
		$server = \hahahalib\external\lite\hahaha_external_variable_server_lite::Instance();
		$method_ = $this->Parameter_Prefix_ . ucfirst(strtolower($server->Request_Method)) . $this->Parameter_Postfix_;

		if(!empty($node_[$method_]))
		{
			$find_ = &$node_[$method_];

			// 成功，處理
			$type_ = &$find_['Type'];
			
			if($type_ == self::CONSTANT_Method_Controller)
			{				
				// 處理參數
				$use_parameters_ = [];
				foreach($parameters_ as &$parameter)
				{
					if($parameter != $this->Token_Blank_)
					{
						// 參數
						$use_parameters_[] = &$parameter;
					}
				}
				
				$controller_class_ = $node_data_['Namespace'] . '\\' . $find_['Controller']; 
				$controller_ = new $controller_class_;
				$action = &$find_['Action'];
				if(method_exists($controller_, $action))
				{
					call_user_func_array(array($controller_, $action), $use_parameters_);
				}
				else
				{
					throw new \Exception('沒有找到' . $controller_class_ . '的方法' . $action);
				}
				
				
			}
			else if($type_ == self::CONSTANT_Method_Function)
			{

			}
			else if($type_ == self::CONSTANT_Method_Callback)
			{

			}
			else if($type_ == self::CONSTANT_Method_Route)
			{

			}
		}

		// 還原
		$this->Node_Now_ = NULL;
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
		$temp_ = explode('?', $this->Uri_Decode_);
		$this->Uri_Token_ = explode('/', $temp_[0]);
		// urlenecode應該是因為怕有Inject攻擊，但我這邊自己處理，不會執行什麼指令，所以直接parse token比對
		// trim space
		if($this->Pass_Space_)
		{
			$this->Trim_Uri_Token_Space();
		}
		// 沒要設計很複雜，大概laravel那樣即可，所以如需細部parser參數，則自己讀出$Uri_Token_處理

		if(!empty($this->Uri_Token_))
		{
			// 移除掉第一個，url還是從key 1開始
			unset($this->Uri_Token_[0]);
			// 必須從0開始
			$this->Uri_Token_ = array_values($this->Uri_Token_);
			
		}
		

	}
	
	public function Trim_Uri_Token_Space()
	{	
		foreach($this->Uri_Token_ as &$token)
		{
			$token = trim($token);
		}
	}
	
}