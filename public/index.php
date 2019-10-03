<?php

/**
 * Hahaha - A PHP Framework
 *
 * @package  Hahaha
 * @author   Chen Jie Qi <hahaha0417@hotmail.com>
 */

/*
// --------------------------------------------------------------------------
Ha Arch.
// --------------------------------------------------------------------------
hahahalib 主要以namespace hahahalib
Application 主要以namespace hahaha為準
通訊用 主要以namespace haha為準
重要變數或函數 主要以namespace ha為準
// --------------------------------------------------------------------------
hahahalib hehehelib hihihilib hohoholib huhuhulib為主要library namespace 
hahaha hehehe hihihi hohoho huhuhu為主要application namespace 
haha hehe hihi hoho huhu為主要通訊namespace 
ha he hi ho hu為主要變數或函數namespace 
// --------------------------------------------------------------------------
hahahalib命名不採psr命名，沿用windows hahahalib命名法
// --------------------------------------------------------------------------
*/

/*
// --------------------------------------------------------------------------
Autoloader
// --------------------------------------------------------------------------

// --------------------------------------------------------------------------
*/
// composer autoloader
require __DIR__.'/../vendor/autoload.php';
// hahaha autoloader - 用php_autoloader_classmap.exe產生


/*
// --------------------------------------------------------------------------
Application
// --------------------------------------------------------------------------
一切都在hahaha_application內部處理
// --------------------------------------------------------------------------
*/
\hahaha\hahaha_application::Instance()->Run();



