<?php

namespace hahaha;

class hahaha_loader
{
	public static $hahaha_dir = NULL;

	public static $loader = NULL;

	public static $hahaha = [];

	public static $autoload_files = [];

	function __construct()
	{
	}

	public static function Class_Mapping()
	{
		self::$hahaha = [
			"hahaha" => [
				"controller" => [
					"_Items" => [
						"index_controller" => self::$hahaha_dir . '/app/controllers/index_controller.php',
					],
				],
				"view" => [
					"_Items" => [
						"index_view" => self::$hahaha_dir . '/app/views/index_view.php',
					],
				],
				"_Items" => [
					"hahaha_route" => self::$hahaha_dir . '/app/routes/hahaha_route.php',
					"hahaha_loader" => self::$hahaha_dir . '/autoload_.php',
					"hahaha_bootstrap" => self::$hahaha_dir . '/bootstrap/hahaha_bootstrap.php',
					"hahaha_bootstrap_abc" => self::$hahaha_dir . '/bootstrap/hahaha_bootstrap_abc.php',
					"hahaha_global" => self::$hahaha_dir . '/config/global/hahaha_global.php',
					"hahaha_global_default" => self::$hahaha_dir . '/config/global/hahaha_global_default.php',
					"hahaha_global_local" => self::$hahaha_dir . '/config/global/hahaha_global_local.php',
					"hahaha_option" => self::$hahaha_dir . '/config/option/hahaha_option.php',
					"hahaha_option_default" => self::$hahaha_dir . '/config/option/hahaha_option_default.php',
					"hahaha_option_local" => self::$hahaha_dir . '/config/option/hahaha_option_local.php',
					"hahaha_system_setting" => self::$hahaha_dir . '/config/system_setting/hahaha_system_setting.php',
					"hahaha_system_setting_default" => self::$hahaha_dir . '/config/system_setting/hahaha_system_setting_default.php',
					"hahaha_system_setting_local" => self::$hahaha_dir . '/config/system_setting/hahaha_system_setting_local.php',
					"hahaha_bootstrap_base" => self::$hahaha_dir . '/framework/base/hahaha_bootstrap_base.php',
					"hahaha_controller_base" => self::$hahaha_dir . '/framework/base/hahaha_controller_base.php',
					"hahaha_model_base" => self::$hahaha_dir . '/framework/base/hahaha_model_base.php',
					"hahaha_route_base" => self::$hahaha_dir . '/framework/base/hahaha_route_base.php',
					"hahaha_view_base" => self::$hahaha_dir . '/framework/base/hahaha_view_base.php',
					"hahaha_application" => self::$hahaha_dir . '/framework/hahaha_application.php',
					"hahaha_instance_trait" => self::$hahaha_dir . '/framework/trait/hahaha_instance_trait.php',
					"hahaha_menu" => self::$hahaha_dir . '/table/hahaha_menu.php',
					"hahaha_parameter" => self::$hahaha_dir . '/table/hahaha_parameter.php',
				],
			],
			"ha" => [
				"_Items" => [
					"Application" => self::$hahaha_dir . '/framework/ha/Appication.php',
					"Bootstrap" => self::$hahaha_dir . '/framework/ha/Bootstrap.php',
					"_Global" => self::$hahaha_dir . '/framework/ha/config/Global.php',
					"Option" => self::$hahaha_dir . '/framework/ha/config/Option.php',
					"System_Setting" => self::$hahaha_dir . '/framework/ha/config/System_Setting.php',
					"Globals" => self::$hahaha_dir . '/framework/ha/external/Globals.php',
					"Server" => self::$hahaha_dir . '/framework/ha/external/Server.php',
					"Log" => self::$hahaha_dir . '/framework/ha/Log.php',
					"Route" => self::$hahaha_dir . '/framework/ha/Route.php',
					"ha_log" => self::$hahaha_dir . '/framework/ha/setting/ha_log.php',
					"Menu" => self::$hahaha_dir . '/framework/ha/table/Menu.php',
					"Parameter" => self::$hahaha_dir . '/framework/ha/table/Parameter.php',
				],
			],
			"hahahalib" => [
				"external" => [
					"lite" => [
						"_Items" => [
							"hahaha_external_variable_server_lite" => self::$hahaha_dir . '/libraries/hahahalib/native/external_variable/lite/hahaha_external_variable_server_lite.php',
						],
					],
					"_Items" => [
						"hahaha_external_variable_argc" => self::$hahaha_dir . '/libraries/hahahalib/native/external_variable/hahaha_external_variable_argc.php',
						"hahaha_external_variable_argv" => self::$hahaha_dir . '/libraries/hahahalib/native/external_variable/hahaha_external_variable_argv.php',
						"hahaha_external_variable_cookie" => self::$hahaha_dir . '/libraries/hahahalib/native/external_variable/hahaha_external_variable_cookie.php',
						"hahaha_external_variable_env" => self::$hahaha_dir . '/libraries/hahahalib/native/external_variable/hahaha_external_variable_env.php',
						"hahaha_external_variable_files" => self::$hahaha_dir . '/libraries/hahahalib/native/external_variable/hahaha_external_variable_files.php',
						"hahaha_external_variable_get" => self::$hahaha_dir . '/libraries/hahahalib/native/external_variable/hahaha_external_variable_get.php',
						"hahaha_external_variable_globals" => self::$hahaha_dir . '/libraries/hahahalib/native/external_variable/hahaha_external_variable_globals.php',
						"hahaha_external_variable_post" => self::$hahaha_dir . '/libraries/hahahalib/native/external_variable/hahaha_external_variable_post.php',
						"hahaha_external_variable_request" => self::$hahaha_dir . '/libraries/hahahalib/native/external_variable/hahaha_external_variable_request.php',
						"hahaha_external_variable_server" => self::$hahaha_dir . '/libraries/hahahalib/native/external_variable/hahaha_external_variable_server.php',
						"hahaha_external_variable_session" => self::$hahaha_dir . '/libraries/hahahalib/native/external_variable/hahaha_external_variable_session.php',
					],
				],
				"_Items" => [
					"hahahalib_loader" => self::$hahaha_dir . '/libraries/hahahalib/autoload_.php',
					"facebook" => self::$hahaha_dir . '/libraries/hahahalib/composite/facebook/facebook.php',
					"facebook_messenger" => self::$hahaha_dir . '/libraries/hahahalib/composite/facebook/messenger/facebook_messenger.php',
					"linebot_broadcast" => self::$hahaha_dir . '/libraries/hahahalib/composite/line/bot/function/linebot_broadcast.php',
					"linebot_multicast" => self::$hahaha_dir . '/libraries/hahahalib/composite/line/bot/function/linebot_multicast.php',
					"linebot_push_message" => self::$hahaha_dir . '/libraries/hahahalib/composite/line/bot/function/linebot_push_message.php',
					"linebot_reply_message" => self::$hahaha_dir . '/libraries/hahahalib/composite/line/bot/function/linebot_reply_message.php',
					"linebot" => self::$hahaha_dir . '/libraries/hahahalib/composite/line/bot/linebot.php',
					"hahaha_cli_function" => self::$hahaha_dir . '/libraries/hahahalib/native/function/hahaha_function_cli.php',
					"hahaha_parser_url" => self::$hahaha_dir . '/libraries/hahahalib/native/parser/hahaha_parser_url.php',
					"hahaha_route" => self::$hahaha_dir . '/libraries/hahahalib/native/route/hahaha_route.php',
					"hahaha_class_instance_handle_trait" => self::$hahaha_dir . '/libraries/hahahalib/native/trait/hahaha_class_instance_handle_trait.php',
					"hahaha_class_instance_handle_trait_lite" => self::$hahaha_dir . '/libraries/hahahalib/native/trait/hahaha_class_instance_handle_trait_lite.php',
					"hahaha_instance_trait" => self::$hahaha_dir . '/libraries/hahahalib/native/trait/hahaha_instance_trait.php',
					"hahaha_view" => self::$hahaha_dir . '/libraries/hahahalib/native/view/hahaha_view.php',
				],
			],
			"Composer" => [
				"Autoload" => [
					"_Items" => [
						"ComposerStaticInitc7b9e45c7c46f431606bb64338aef086" => self::$hahaha_dir . '/vendor/composer/autoload_static.php',
						"ClassLoader" => self::$hahaha_dir . '/vendor/composer/ClassLoader.php',
					],
				],
				"_Items" => [
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
		if(empty(self::$hahaha))
		{
			self::Class_Mapping();
		}

		$node = explode("\\" , $class);

		$find = &self::$hahaha;

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
			if(!$filename)
			{
				return false;
			}
			require $filename;
		}
	}

	public static function Autoload()
	{
		self::$hahaha_dir = dirname(__FILE__);
		if (null !== self::$loader)
		{
			return self::$loader;
		}

		self::$loader = new \hahaha\hahaha_loader();
		spl_autoload_register(array('hahaha\hahaha_loader', 'Load_Class_Loader'), true, true);

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

return \hahaha\hahaha_loader::Autoload();