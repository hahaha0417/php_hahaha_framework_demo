<?php

/*
// --------------------------------------------------------------------------
原始 : hahaha
維護 : hohoho
指揮 : commander
// --------------------------------------------------------------------------
決定 : name
// --------------------------------------------------------------------------
說明 : 
// --------------------------------------------------------------------------

// --------------------------------------------------------------------------
*/

namespace hahaha\view\module\integrate;

/*
視圖
這是組件(快速使用)，所以採取比較詳細命名
*/
class control_main_control extends \hahaha\hahaha_view_base
{
    use \hahahalib\hahaha_instance_trait;

	function __construct()
	{   
        // 找不到method時要用
		parent::__construct();
    }
    
    /*
    基本
    */
    public function Index($view)
    {
        $menu_ = \ha\Menu::Get();
        // 先取得，不然會以為是空的
        \ha\Session::Get()->user;
        
// --------------------------------------------------------------------------
?>
<script src="/assets/module/integrate/control/main_control/main_control.js"></script>
<link rel="stylesheet" href="/assets/module/integrate/control/main_control/main_control.css">
<? // -------------------------------------------------------------------------- ?>
<div id="control_box">
    <div class="control_button_box">

    </div>
    <div class="control_page_box">

    </div>
</div>
<?
// --------------------------------------------------------------------------
    }
}

