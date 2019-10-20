<?php

/*
// --------------------------------------------------------------------------
Hahaha - A PHP Framework
// --------------------------------------------------------------------------
@name       PHP Hahaha Framework
@package    Hahaha
@author     Hahaha(Chen Jie Qi) 
@email      hahaha0417@hotmail.com
@phone      0916353255
@date       2019 / 10 / 20
// --------------------------------------------------------------------------
*/

/*
// --------------------------------------------------------------------------
Application
// --------------------------------------------------------------------------
主流程
// --------------------------------------------------------------------------
*/
require __DIR__.'/../../framework/hahaha/function/hahaha_function_application.php';
\ha\Application(
    // -- 根目錄 --
    realpath(__DIR__ . '/../..'),
    // -- 應用程式 --
    function(){
        // --------------------------------------------------------------------------
        // -- 入口 --
        // --------------------------------------------------------------------------
        \hahaha\hahaha_application::Instance()->Run();
        // Console();
        // --------------------------------------------------------------------------
    },
    // -- 設定 --
    [
        'application' => true,
        //'monitor' => true,
    ]
);
// --------------------------------------------------------------------------

/*
// --------------------------------------------------------------------------
執行區
// --------------------------------------------------------------------------
主流程
// --------------------------------------------------------------------------
// 參數
// http://blog.jangmt.com/2010/06/php-command-line-arguments.html
*/
// 這樣寫(流程內)
// function Console()
// {
//     echo 'hahaha';
//     echo \hahaha\hahaha_system_setting::Instance()->Flow->Enabled;
// }
// 直接寫(流程外)
echo 'hahaha';
echo \hahaha\hahaha_system_setting::Instance()->Flow->Enabled;





