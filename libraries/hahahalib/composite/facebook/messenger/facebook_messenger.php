<?php

/*
ker0x/messenger 二次開發
*/

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

namespace hahahalib;

// Kerox\Messenger會出錯，會卡在getCallbackEvents()所以換用BotMan
use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;
use Log;

class facebook_messenger
{
    /** \Kerox\Messenger\Messenger\Messenger
     * 
     */
    public $Facebook_Messenger_ = NULL;

    function __construct($app_secret, 
		$page_token,
		$verify_token
    )
    {		
		DriverManager::loadDriver(\BotMan\Drivers\Facebook\FacebookDriver::class);
		$config = [
			'facebook' => [
				'token' => $page_token,
				'app_secret' => $app_secret,
				'verification' => $verify_token
			]
		];
        $this->Facebook_Messenger_ = BotManFactory::create($config);
		
    }


}