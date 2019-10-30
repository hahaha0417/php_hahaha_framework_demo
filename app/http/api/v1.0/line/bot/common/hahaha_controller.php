<?php
/*
{{-- 原始 : hahaha --}}
{{-- 維護 :  --}}
{{-- 指揮 :  --}}
{{-- ---------------------------------------------------------------------------------------------- --}}
{{-- 決定 : name --}}
{{-- 
    ----------------------------------------------------------------------------
    說明 : 
    ----------------------------------------------------------------------------   
    
    ----------------------------------------------------------------------------
--}}
{{-- ---------------------------------------------------------------------------------------------- --}}
*/

// https://blog.toright.com/posts/5727/%E7%94%A8-php-%E5%AF%A6%E7%8F%BE-line-message-api-%E6%8E%A5%E6%94%B6%E7%B3%BB%E7%B5%B1%E8%A8%8A%E6%81%AF.html
// https://developers.line.biz/en/reference/messaging-api/#send-reply-message
//
// Line SDK
// https://developers.line.biz/en/reference/messaging-api/#message-objects
// https://github.com/line/line-bot-sdk-php/blob/master/src/LINEBot.php
// https://line.github.io/line-bot-sdk-php/namespace-LINE.LINEBot.MessageBuilder.html
// http://marcoyan0814.blogspot.com/2016/11/line-line-messaging-api-for-php-line-bot.html
// http://hiroasake.blogspot.com/2018/10/line-botphp-bot.html

namespace hahaha\api\line\bot\common;

// use \ha\Log;

class hahaha_controller extends \hahaha\hahaha_controller_base
{    
	use \hahahalib\hahaha_instance_trait;
	
	// 全域資料
	public $Global_ = [];
	// 全域檔案
	public $Global_File_;
    //
    public function __construct()
    {

    }
	
	public function Broadcast($type)
    {
		// $linebot_ = new \hahahalib\line\hahaha_linebot(
		// 	'x/eb6xIldWmwn38EPY8y2lhQJKln2QIrCrikJfUvdxjVnlsGEuFkfSey7V+a0ucKL+lhNUm9YwUwyLmzOJ2RNY7qmPMu5XEp8/SXvG03peOJ69PTF7ZZu0D6Lor5Z+nsc7l2oQ/iGYafjEbVIvuHqAdB04t89/1O/w1cDnyilFU=',
		// 	'742e69bbc26d797d8cfdbe7be93a1862'
		// );
		
		// $linebot_broadcast_ = new \hahahalib\line\hahaha_linebot_broadcast;
		
		// switch($type)
		// {
		// 	case 'text':
		// 	{					
		// 		// bot dirty logic
		// 		$result = $linebot_broadcast_->Text($linebot_, "文字");
		// 	}
		// 	break;
		// 	case 'image':
		// 	{
		// 		$origin_url = 'https://hahaha0417.zapto.org:8443/image/front/home/overview/OBS%20iForm%E7%A4%BA%E6%84%8F%E5%9C%96.png';
		// 		$preview_url = 'https://hahaha0417.zapto.org:8443/image/front/home/overview/OBS%20iForm%E7%A4%BA%E6%84%8F%E5%9C%96.png';
		// 		$result = $linebot_broadcast_->Image($linebot_, $origin_url, $preview_url);  
		// 	}
		// 	break;
		// 	case 'video':
		// 	{
		// 			$origin_url = 'https://hahaha0417.zapto.org:8443/video/Oring.mp4';
		// 			$preview_url = 'https://hahaha0417.zapto.org:8443/image/front/home/overview/OBS%20iForm%E7%A4%BA%E6%84%8F%E5%9C%96.png';
		// 			$result = $linebot_broadcast_->Video($linebot_, $origin_url, $preview_url);  

		// 	}
		// 	break;
		// 	case 'audio':
		// 	{
		// 			$origin_url = 'https://static.rti.org.tw/assets/audio/2019/09/13/1_20190913_2005_1572.mp3';
		// 			$result = $linebot_broadcast_->Audio($linebot_, $origin_url, 10);  

		// 	}
		// 	break;
		// 	case 'location':
		// 	{
		// 			$title = 'title';
		// 			$address = 'address';
		// 			$latitude = 25.0478142;	
		// 			$longitude = 121.51694880000002;		
		// 			$result = $linebot_broadcast_->Location($linebot_, $title, $address, $latitude, $longitude);  

		// 	}
		// 	break;
		// 	case 'sticker':
		// 	{
		// 			$package_id = '1';		
		// 			$sticker_id = '1';
		// 			$result = $linebot_broadcast_->Sticker($linebot_, $package_id, $sticker_id);  

		// 	}
		// 	break;

		// 	/*
		// 	case 'raw':
		// 	{
		// 			$message = [
		// 					'one line',
		// 					'two line'
		// 			];
		// 			$result = $linebot_broadcast_->Raw($linebot_, $message);  

		// 	}
		// 	break;
		// 	*/


		// 	case 'multiple':
		// 	{
		// 			$message = 'multi';
		// 			$origin_url = 'https://hahaha0417.zapto.org:8443/image/front/home/overview/OBS%20iForm%E7%A4%BA%E6%84%8F%E5%9C%96.png';
		// 			$preview_url = 'https://hahaha0417.zapto.org:8443/image/front/home/overview/OBS%20iForm%E7%A4%BA%E6%84%8F%E5%9C%96.png';
					
		// 			$video_url = 'https://hahaha0417.zapto.org:8443/video/Oring.mp4';
		// 			$audio_url = 'https://static.rti.org.tw/assets/audio/2019/09/13/1_20190913_2005_1572.mp3';

		// 			$title = 'title';
		// 			$address = 'address';
		// 			$latitude = 25.0478142;	
		// 			$longitude = 121.51694880000002;		

		// 			$package_id = '1';		
		// 			$sticker_id = '1';


		// 			$messages = [
							
		// 					'text' => [
		// 							'text' => $message
		// 					],
		// 					'image' => [
		// 							'image' => $origin_url, 						
		// 							'preview' => $preview_url 
		// 					],
		// 					'video' => [
		// 							'video' => $video_url, 						
		// 							'preview' => $preview_url 
		// 					],
		// 					'audio' => [
		// 							'audio' => $audio_url,
		// 							'duration' => 10						
		// 					],
		// 					'location' => [
		// 							'title' => $title,
		// 							'address' => $address,
		// 							'latitude' => $latitude,
		// 							'longitude' => $longitude
		// 					],
		// 					// 不能和location同時送
		// 					/*
		// 					'sticker' => [
		// 							'package_id' => $package_id,
		// 							'sticker_id' => $sticker_id 
		// 					],
		// 					 */

							 
		// 			];
		// 			$linebot_broadcast_->Multiple($linebot_, $messages); 
					
		// 	}
		// 	break;
		// }
	}

	/*
	$command 吃進來的指令 !xxx!xxx!xxx:aaa 加最前面!是為了快速判斷是否是指令，避免每次都處理
	$command_token 吃進來的節點 "!"
	$command_command : 節點的指令 ":"
	*/
	public function Deal_Command(&$command, 
		&$command_token, 
		&$command_command, 
		&$command_parameter
	)
	{		
		$command_parameter_temp_ = explode(' -', $command);
		$m = count($command_parameter_temp_);
		if($m == 0)
		{
			// 應該不會發生
			return false;
		}
		else if($m == 1)
		{
			// 沒有參數
			$command_temp_ = explode(':', $command);
		}
		else
		{
			// 找到參數
			$command_temp_ = explode(':', $command_parameter_temp_[0]);
			foreach($command_parameter_temp_ as &$cmd)
			{
				$cmd_ = trim($cmd);
				if($cmd_ != "")
				{
					$command_parameter[] = $cmd_;
				}
			}
		}

		

		$n = count($command_temp_);

		if($n == 0)
		{
			// 應該不會發生
			return false;
		}
		else if($n == 1)
		{
			// 查詢節點
			$command_token_temp_ = explode('!', $command_temp_[0]);
			foreach($command_token_temp_ as &$cmd)
			{
				$cmd_ = trim($cmd);
				if($cmd_ != "")
				{
					$command_token[] = $cmd_;
				}
			}
		}
		else if($n == 2)
		{
			// 查詢節點
			$command_token_temp_ = explode('!', $command_temp_[0]);
			foreach($command_token_temp_ as &$cmd)
			{
				$cmd_ = trim($cmd);
				if($cmd_ != "")
				{
					$command_token[] = $cmd_;
				}
			}
			$command_command = trim($command_temp_[1]);
		}
		else
		{
			// 格式不對，略過
			return false;
		}
		return true;
	}

	/*
	執行系統指令
	這邊撰寫系統指令，如果需要可以包成一個指令模組，目前簡單寫
	*/
	public function Command(&$event, 
		&$command, 
		&$command_token, 
		&$command_command, 
		&$command_parameter
	)
	{
		
		$linebot_reply_message_ = \hahahalib\line\hahaha_linebot_reply_message::Instance();
		$n_command = count($command_token);		
		
		// 有用到$command_parameter才處理$command_parameter，加快速度，不是每個指令都要參數
		if($n_command >= 1 && $command_token[0] == 'login')
		{
			if(empty($this->Global_['users']))
			{
				$this->Global_['users'] = [];
			}

			$id_ = &$event->getUserId();
			if(empty($this->Global_['users'][$id_]))
			{
				$this->Global_['users'][$id_] = [];
			}

		
			if($this->Global_['users'][$id_]['state'] == 'logined')
			{
				$linebot_reply_message_->Text($event, "已登入");
			}
			else
			{
				// 登入
				$this->Global_['users'][$id_]['state'] = 'login';
				$this->Global_['users'][$id_]['action'] = 'user';
				$linebot_reply_message_->Text($event, "請輸入使用者");
			}
		}
		else if($n_command >= 1 && $command_token[0] == 'cancel')
		{
			if(empty($this->Global_['users']))
			{
				$this->Global_['users'] = [];
			}

			$id_ = &$event->getUserId();
			if(empty($this->Global_['users'][$id_]))
			{
				$this->Global_['users'][$id_] = [];
			}

			if($this->Global_['users'][$id_]['state'] == 'logined')
			{
				$linebot_reply_message_->Text($event, "已取消");
			}
			else
			{
				unset($this->Global_['users'][$id_]['state']);
				unset($this->Global_['users'][$id_]['action']);
				$linebot_reply_message_->Text($event, "已取消");
			}
		}
		else if($n_command >= 1 && $command_token[0] == 'logout')
		{
			if(empty($this->Global_['users']))
			{
				$this->Global_['users'] = [];
			}

			$id_ = &$event->getUserId();
			if(empty($this->Global_['users'][$id_]))
			{
				$this->Global_['users'][$id_] = [];
			}

			if($this->Global_['users'][$id_]['state'] == 'logined')
			{
				unset($this->Global_['users'][$id_]['state']);
				$linebot_reply_message_->Text($event, "已登出");
			}
			else
			{
				$linebot_reply_message_->Text($event, "請先登入");
			}
		}
		else if($n_command >= 1 && $command_token[0] == 'setting')
		{
			if(empty($this->Global_['setting']))
			{
				$this->Global_['setting'] = [];
			}

			$id_ = &$event->getUserId();
			if($this->Global_['users'][$id_]['state'] == 'logined')
			{
				$this->Global_['users'][$id_]['action'] = 'setting';
				$linebot_reply_message_->Text($event, "請選擇設定檔");
			}
			else
			{
				$linebot_reply_message_->Text($event, "請先登入");				
			}
		}
		else if($n_command >= 1 && $command_token[0] == 'cancel_setting')
		{
			$id_ = &$event->getUserId();
			if($this->Global_['users'][$id_]['state'] == 'logined')
			{
				unset($this->Global_['setting']['setting']);
				$linebot_reply_message_->Text($event, "取消設定檔");
			}
			else
			{
				$linebot_reply_message_->Text($event, "請先登入");	
			}
		}
		else
		{
			$linebot_reply_message_->Text($event, "沒有系統指令");
			// 如要附加，這邊再使用callback
		}
	}

	public function Action(&$event, 
		&$command,
		&$user, 
		&$callback, 
		&$setting
	)
	{
		$linebot_reply_message_ = \hahahalib\line\hahaha_linebot_reply_message::Instance();
		
		$id_ = &$event->getUserId();
		if($this->Global_['users'][$id_]['state'] == 'login')
		{
			if($this->Global_['users'][$id_]['action'] == 'user')
			{
				if($command == "")
				{
					$linebot_reply_message_->Text($event, "請輸入使用者");
				}
				else
				{
					$option_ = \ha\Option::Get();
					if(!empty($option_->Line->Bot->Users[$command]))
					{
						// 有使用者
						$this->Global_['users'][$id_]['action'] = 'password';
						$this->Global_['users'][$id_]['user'] = $command;
						$linebot_reply_message_->Text($event, "請輸入密碼");
					}
					else
					{
						if($command == "!cancel")
						{
							// 繼續，Command會處理
							return false;
						}
						else
						{
							$linebot_reply_message_->Text($event, "沒有使用者，請重新使用者");
						}
						
					}
				}				
			}
			else if($this->Global_['users'][$id_]['action'] == 'password')
			{
				if($command == "")
				{
					$linebot_reply_message_->Text($event, "請輸入密碼");
				}
				else
				{
					$option_ = \ha\Option::Get();
					if($command == $option_->Line->Bot->Users[$this->Global_['users'][$id_]['user']])
					{
						$linebot_reply_message_->Text($event, "登入成功");
						$this->Global_['users'][$id_]['state'] = 'logined';
						unset($this->Global_['users'][$id_]['action']);
					}
					else
					{
						$linebot_reply_message_->Text($event, "登入失敗");
						unset($this->Global_['users'][$id_]['action']);
						unset($this->Global_['users'][$id_]['user']);
						unset($this->Global_['users'][$id_]['state']);
					}
				}	
			}
			else
			{
				// 沒事，繼續
				return false;
			}
			return true;
		}
		else if($this->Global_['users'][$id_]['state'] == 'logined')
		{
			if($this->Global_['users'][$id_]['action'] == 'setting')
			{
				if($command == "")
				{
					$linebot_reply_message_->Text($event, "請輸入密碼");
				}
				else
				{
					$setting_class_ = "\\ha\\{$user}\\line\\bot\\{$callback}\\setting\\{$command}_setting";

					if(class_exists($setting_class_))
					{
						// 設定存在
						$this->Global_['setting']['setting'] = $command;
						$linebot_reply_message_->Text($event, "使用設定檔");
						unset($this->Global_['users'][$id_]['action']);
					}
					else
					{
						// 沒有設定
						$linebot_reply_message_->Text($event, "沒有設定檔");
						unset($this->Global_['users'][$id_]['action']);
					}
				}
				
			}
			else
			{
				// 沒事，繼續
				return false;
			}
			return true;
		}
		else
		{
			// 如要附加，這邊再使用callback
		}
	}

	/*
	這裡製作回應指令
	*/
	public function Reply(&$event, &$command)
	{
		$linebot_reply_message_ = \hahahalib\line\hahaha_linebot_reply_message::Instance();
		
		// 有用到$command_parameter才處理$command_parameter，加快速度，不是每個指令都要參數
		switch($command['command'])
		{
			case 'text':
			{					
				if(empty($command['text']))
				{
					$result = $linebot_reply_message_->Text($event, '沒有文字');
				}
				else
				{
					$result = $linebot_reply_message_->Text($event, $command['text']);
				}				
			}
			break;
			case 'image':
			{
				$origin_url_ = &$command['origin_url'];
				$preview_url_ = &$command['preview_url'];
				if(empty($origin_url_) || empty($preview_url_))
				{
					
					$result = $linebot_reply_message_->Text($event, '沒有圖片');
				}
				else
				{
					
					$result = $linebot_reply_message_->Image($event, $origin_url_, $preview_url_);  
				}
				
			}
			break;
			case 'video':
			{
				$origin_url_ = &$command['origin_url'];
				$preview_url_ = &$command['preview_url'];
				if(empty($origin_url_) || empty($preview_url_))
				{
					
					$result = $linebot_reply_message_->Text($event, '沒有影片');
				}
				else
				{
					
					$result = $linebot_reply_message_->Video($event, $origin_url_, $preview_url_); 
				}
			}
			break;
			case 'audio':
			{
				$origin_url_ = &$command['origin_url'];
				$time_ = &$command['time'];
				if(empty($origin_url_) || empty($time_))
				{
					
					$result = $linebot_reply_message_->Text($event, '沒有聲音');
				}
				else
				{
					
					$result = $linebot_reply_message_->Audio($event, $origin_url_, $time_);  
				}
			}
			break;
			case 'location':
			{
				$title_ = &$command['title'];
				$address_ = &$command['address'];
				$latitude_ = &$command['latitude'];
				$longitude_ = &$command['longitude'];	
				if(empty($title_) || empty($address_) || empty($latitude_) || empty($longitude_))
				{
					
					$result = $linebot_reply_message_->Text($event, '沒有位置');
				}
				else
				{
					
					$result = $linebot_reply_message_->Location($event, $title_, $address_, $latitude_, $longitude_);  
				}
			}
			break;
			case 'sticker':
			{
				$package_id_ = &$command['package_id'];
				$sticker_id_ = &$command['sticker_id'];
				if(empty($package_id_) || empty($sticker_id_))
				{
					
					$result = $linebot_reply_message_->Text($event, '沒有貼圖');
				}
				else
				{
					
					$result = $linebot_reply_message_->Sticker($event, $package_id_, $sticker_id_);  
				}
			}
			break;
			case 'raw':
			{
				$message_ = &$command['message'];

				if(empty($message_))
				{
					
					$result = $linebot_reply_message_->Text($event, '沒有Raw');
				}
				else
				{
					
					$result = $linebot_reply_message_->Raw($event, $message_);  
				}	
			}
			break;			
			case 'multiple':
			{
				$messages_ = &$command['messages'];

				// Sticker不能和Location同時送
				if(empty($messages_))
				{
					
					$result = $linebot_reply_message_->Text($event, '沒有多組');
				}
				else
				{	
					$result = $linebot_reply_message_->Multiple($event, $messages_); 
				}	
			}
			break;
			case 'time':
			{			
				// 測量時間
				\hahaha\hahaha_monitor::Instance()->Event_ = &$event;
				\hahaha\hahaha_monitor::Instance()->Run_ = true;
			}
			break;
		}
	}

	/*
	當做完整將其整到app/libraries/custom/line/bot裡面
	因為我規劃上會使用到很多app本身的一些函式，也就是綁app
	如有要附加再挖callback，使其他人繼承後附加
	因為line bot包含很多，他不是只有reply，例如可以回broadcast or 其他設計(FSM)，因此不要任意就做成單獨\模組
	*/
    public function Callback($user, $callback, $setting)
    {  
		// Log::Get()->Initial_Base();
		// 使用
		// Log::Error('aa',['4444']);
		
		// 選擇設定檔
			
		// --------------------------------------------------------------------------
		// 初始化
		// --------------------------------------------------------------------------
		$option_ = \ha\Option::Get();
		$root_ = $option_->FTP->Path . '/' . $user;
		// 由於手動建置，我應該是不收專案費的(因為可能MIT開源)
		// 如果有付費用我的工具管理，我會幫你順便用我的小工具php_autoloader_classmap.exe，用命令行產出autoload_.php，但是要卡保護鎖(因為我需要收入)
		// 如果沒付費，通常會自己DIY的，一定可以登入Server，所以請用composer做class map
		// 要是不會呢，就請看懂我的autoload_.php，手動的方式建立class map(修改我的autoload_.php)，其實他跟composer產出的autoload.php蠻像的
		
		// 執行對應的autoload_.php
		// 只要專案裡有綁composer，你不會差引用我的一個檔
		require $root_ . '/autoload_.php';
		$ftp_setting_class_ = "\ha\\{$user}\\setting";
		$ftp_setting_ = $ftp_setting_class_::Instance()->Initial();

		$commands_ = [];

		// Session & Cookie對應同一Client，因此無法做Global設定
		$data_path_ = \ha\App::Get()->Root_ . "/storage/data/{$user}/line/bot/{$callback}";
		$this->Global_File_ = $data_path_ . "/global.json";

		if (!file_exists($data_path_)) {
			// 暴力建立資料夾
			mkdir($data_path_, 0777, true);
		}

		if(!file_exists($this->Global_File_)) 
		{
			file_put_contents($this->Global_File_, json_encode([]));
		}
		
		// 轉成array
		$this->Global_ = json_decode(file_get_contents($this->Global_File_), true);
		
		if(empty($this->Global_['setting']['setting']))
		{
			// 通用設定檔
			$setting_class_general_ = "\\ha\\{$user}\\line\\bot\\general\\setting\\{$setting}_setting";
			// 設定檔
			$setting_general_ = $setting_class_general_::Instance()->Initial();

			foreach($setting_general_->Initial['command'] as &$command_class)
			{
				$command_class_ = "ha\\hahaha\\line\\bot\\general\\command\\{$command_class}";
				// 載入命令
				$command_set_ = $command_class_::Instance()->Initial();
				$commands_ = array_merge_recursive($commands_, $command_set_->Commands);
			}
		}
		else		
		{
			$setting_name_ = &$this->Global_['setting']['setting'];
			// 通用設定檔
			$setting_class_general_ = "\\ha\\{$user}\\line\\bot\\general\\setting\\{$setting_name_}_setting";
			// 設定檔
			$setting_general_ = $setting_class_general_::Instance()->Initial();

			foreach($setting_general_->Initial['command'] as &$command_class)
			{
				$command_class_ = "ha\\hahaha\\line\\bot\\general\\command\\{$command_class}";
				// 載入命令
				$command_set_ = $command_class_::Instance()->Initial();
				$commands_ = array_merge_recursive($commands_, $command_set_->Commands);
			}
		}
		if(empty($this->Global_['setting']['setting']))
		{
			// 指定設定檔
			$setting_class_ = "\\ha\\{$user}\\line\\bot\\{$callback}\\setting\\{$setting}_setting";
			// 設定檔
			$setting_ = $setting_class_::Instance()->Initial();

			foreach($setting_->Initial['command'] as &$command_class)
			{
				$command_class_ = "ha\\hahaha\\line\\bot\\{$callback}\\command\\{$command_class}";
				// 載入命令
				$command_set_ = $command_class_::Instance()->Initial();
				$commands_ = array_merge_recursive($commands_, $command_set_->Commands);
			}
		}		
		else
		{
			$setting_name_ = &$this->Global_['setting']['setting'];
			// 指定設定檔
			$setting_class_ = "\\ha\\{$user}\\line\\bot\\{$callback}\\setting\\{$setting_name_}_setting";
			// 設定檔
			$setting_ = $setting_class_::Instance()->Initial();

			foreach($setting_->Initial['command'] as &$command_class)
			{
				$command_class_ = "ha\\hahaha\\line\\bot\\{$callback}\\command\\{$command_class}";
				// 載入命令
				$command_set_ = $command_class_::Instance()->Initial();
				$commands_ = array_merge_recursive($commands_, $command_set_->Commands);
			}
		}	
		// --------------------------------------------------------------------------


		// --------------------------------------------------------------------------
		// 訊息處理
		// --------------------------------------------------------------------------
		$linebot_ = \hahahalib\line\hahaha_linebot::Instance()->Initial_Config(
			$ftp_setting_->Line->Bot->Hahaha->Channel_Access_Token,
			$ftp_setting_->Line->Bot->Hahaha->Channel_Secret
		);
		$linebot_reply_message_ = \hahahalib\line\hahaha_linebot_reply_message::Instance();
		
		$linebot_reply_message_->Handle($linebot_, function(&$linebot_reply_message, &$event) use (&$commands_, &$user, &$callback, &$setting){
			// 陣列裡面是物件
			// http://hiroasake.blogspot.com/2018/10/line-botphp-bot.html
			$message = "";
			
			// 不分大小寫，有做參數再弄成選項
			$command_ = trim(strtolower($event->getText()) );

			if(!$this->Action($event, $command_, $user, $callback, $setting))
			{
				// 沒有動作，繼續					
			}
			else
			{
				// 有動作，攔截
				file_put_contents($this->Global_File_, json_encode($this->Global_));
				return;
			}
			// 要初始化，不然NULL不能reference
			$command_token_ = [];
			$command_command_ = "";
			$command_parameter_ = [];
			// parser
			if($command_[0] != "!" && $command_[0] != ":")
			{
				// 不是指令，略過
			}
			else
			{
				// 是指令
				if(!$this->Deal_Command($command_, $command_token_, $command_command_, $command_parameter_))
				{
					// 沒有指令
					$linebot_reply_message->Text($event, "指令格式錯誤");					
					return;
				}

				// 查節點
				$node_ = &$commands_;
				$find_ = true;				
				foreach($command_token_ as &$token)
				{
					$temp_ = &$commands_[$token];
					if(empty($temp_) )
					{
						// 沒有指令
						$find_ = false;
						break;
					}
					$node_ = &$temp_;
					unset($temp_);
				}

				if($command_command_ == "")
				{
					// 系統指令
					$this->Command($event, $command_, $command_token_, $command_command_, $command_parameter_);					
					file_put_contents($this->Global_File_, json_encode($this->Global_));
					return;
				}
				else
				{
					if(!$find_)
					{
						$linebot_reply_message->Text($event, "沒有指令節點");
						return;
					}

					// 找到節點
					$command_list_ = &$node_['_Items'];
					if(empty($command_list_) )
					{
						// 沒有指令
						$linebot_reply_message->Text($event, "沒有指令");
						return;
					}
					else
					{
						// 
						$command_target_ = &$command_list_[$command_command_];
						if(empty($command_target_))
						{
							// 沒有指令
							$linebot_reply_message->Text($event, "沒有指令");
							return;
						}
						else
						{
							// 處理指令
							$this->Reply($event, $command_target_);
							return;
						}
					}
				}
			}
			
		});
		// --------------------------------------------------------------------------

    }
}
