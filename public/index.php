<?php

/*
Hahaha - A PHP Framework

@package  Hahaha
@author   Chen Jie Qi <hahaha0417@hotmail.com>
*/

/*
// --------------------------------------------------------------------------
參數
// --------------------------------------------------------------------------

// --------------------------------------------------------------------------
*/
$monitor_use_ = true;

/*
// --------------------------------------------------------------------------
監控
// --------------------------------------------------------------------------

// --------------------------------------------------------------------------
*/
if($monitor_use_)
{
    require __DIR__.'/../framework/hahaha/trait/hahaha_instance_trait.php';
    require __DIR__.'/../app/hahaha_monitor.php';
    $monitor_ = \hahaha\hahaha_monitor::Instance();
    $monitor_->Begin();
}


/*
// --------------------------------------------------------------------------
Load
// --------------------------------------------------------------------------
最簡載入，在hahaha_application內層處理Autoload
預設 hahaha_application_base Initial會載入Autoload
// --------------------------------------------------------------------------
*/
function Load()
{    
    require __DIR__.'/../framework/hahaha/base/hahaha_application_base.php';
    require __DIR__.'/../libraries\hahahalib\native\trait\hahaha_instance_trait.php';
    require __DIR__.'/../config/system_setting/hahaha_system_setting.php';
    require __DIR__.'/../config/system_setting/hahaha_system_setting_default.php';
    require __DIR__.'/../config/system_setting/hahaha_system_setting_local.php';
    require __DIR__.'/../app/hahaha_application.php';
}
Load();

/*
// --------------------------------------------------------------------------
Application
// --------------------------------------------------------------------------
一切都在hahaha_application內部處理
// --------------------------------------------------------------------------
*/
if($monitor_use_)
{
    $monitor_->Design();
}
\hahaha\hahaha_application::Instance()->Run();

if($monitor_use_)
{
    $monitor_->End();
}



