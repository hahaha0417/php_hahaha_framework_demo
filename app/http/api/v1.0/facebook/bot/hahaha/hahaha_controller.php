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



namespace hahaha\api\facebook\bot;

use BotMan\BotMan\BotMan;
use BotMan\Drivers\Facebook\Extensions\ButtonTemplate;
use BotMan\Drivers\Facebook\Extensions\ElementButton;

class hahaha_controller extends \hahaha\hahaha_controller_base
{    
	use \hahahalib\hahaha_instance_trait;
	
    //
    public function __construct()
    {

    }
	
	public function Broadcast($type)
    {		

		
		
		
	}

    public function Callback()
    {  
		$facebook_messenger_ = \hahahalib\facebook\hahaha_facebook_messenger::Instance()->Initial(
			'17c1813d6225957e7c18646a4362ae8b',			
			'EAADjHqxJo3wBABpHjvTQfZCrfLaWtQwcifnMxljqEv64ipgnZBhxWrj25dtwEtORYCoupeplzqcbeKufLZCeAfi364WEdoSsoAlK9Sl2vL9oH9V9hSzcZCEDDldVUkCDejAGR8f244P5h7NJXkd16tNrRDgSNsCJRvLmJepXSQZDZD',
			'hahaha'
		);

		$facebook_messenger_->Facebook_Messenger_->hears('hello', function(BotMan $bot)
		{
			$bot->reply("hello");
			
		});
		
		//測試的要加入開發者
		// https://stackoverflow.com/questions/36803570/facebook-messenger-webhook-setup-but-not-triggered	
		// 出錯太多會卡住，似乎要等到全部錯的跑完才會恢復正常
		// https://botman.io/2.0/installation
		$facebook_messenger_->Facebook_Messenger_->hears('button', function(BotMan $bot)
		{
			$bot->reply(ButtonTemplate::create('Do you want to know more about BotMan?')
				->addButton(ElementButton::create('Tell me more')
					->type('postback')
					->payload('tellmemore')
				)
				->addButton(ElementButton::create('Show me the docs')
					->url('http://botman.io/')
				)
			);
			
		});
			
		$facebook_messenger_->Facebook_Messenger_->listen();
		
		
    }
}
