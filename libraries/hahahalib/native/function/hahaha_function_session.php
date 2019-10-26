<?php

namespace hahahalib;

class hahaha_function_session
{
	/*
	Session 使用
	*/
	public static $Session_ = false;
	
	/*
	啟動Session
	*/
	public function Start()
	{
		if(!self::$Session_)
		{
			self::$Session_ = true;
			session_start();
		}
	}

	/*
	清空Session
	*/
	public function Destroy()
	{
		if(self::$Session_)
		{
			self::$Session_ = false;
			session_destroy();
		}
	}
	
} 