<?php

namespace hahahalib;

class hahahalib_loader
{
	public static $hahahalib_dir = NULL;

	public static $loader = NULL;

	public static $hahahalib = [];

	public static $autoload_files = [];

	function __construct()
	{
	}

	public static function Class_Mapping()
	{
		self::$hahahalib = [
			"hahahalib" => [
				"_Items" => [
					"hahahalib_loader" => self::$hahahalib_dir . '/autoload_.php',
					"facebook" => self::$hahahalib_dir . '/composite/facebook/facebook.php',
					"facebook_messenger" => self::$hahahalib_dir . '/composite/facebook/messenger/facebook_messenger.php',
					"linebot_broadcast" => self::$hahahalib_dir . '/composite/line/bot/function/linebot_broadcast.php',
					"linebot_multicast" => self::$hahahalib_dir . '/composite/line/bot/function/linebot_multicast.php',
					"linebot_push_message" => self::$hahahalib_dir . '/composite/line/bot/function/linebot_push_message.php',
					"linebot_reply_message" => self::$hahahalib_dir . '/composite/line/bot/function/linebot_reply_message.php',
					"linebot" => self::$hahahalib_dir . '/composite/line/bot/linebot.php',
				],
			],
		];
	}

	public static function Autoload_File_Mapping()
	{
		self::$autoload_files = [
		];
	}

	public static function Load_Class_Loader($class)
	{
		// 處理mapping
		if(empty(self::$hahahalib))
		{
			self::Class_Mapping();
		}

		$node = explode("\\" , $class);

		$find = &self::$hahahalib;

		$n = count($node);
		for($i = 0; $i < $n - 1; ++$i)
		{
			$find = &$find[$node[$i]];
			if(!$find)
			{
				// 沒找到
				return false;
			}
		}

		if($find && $n > 0)
		{
			$filename = &$find["_Items"][$node[$n - 1]];
			if(!$filename || !file_exists($filename))
			{
				return false;
			}
			require $filename;
		}
	}

	public static function Autoload()
	{
		self::$hahahalib_dir = dirname(__FILE__);
		if (null !== self::$loader)
		{
			return self::$loader;
		}

		self::$loader = new \hahahalib\hahahalib_loader();
		spl_autoload_register(array('hahahalib\hahahalib_loader', 'Load_Class_Loader'), true, true);

		if(empty(self::$autoload_files))
		{
			self::Autoload_File_Mapping();
		}

		//load autoload files
		foreach (self::$autoload_files as $key => $file)
		{
			if (empty($GLOBALS['__composer_autoload_files'][$key]))
			{
				require_once $file;
				
				$GLOBALS['__composer_autoload_files'][$key] = true;
			}
		}

		return self::$loader;
	}
}

return \hahahalib\hahahalib_loader::Autoload();