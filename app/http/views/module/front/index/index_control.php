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

namespace hahaha\view\module\front;

/*
視圖
這是組件(快速使用)，所以採取比較詳細命名
*/
class index_index_control extends \hahaha\hahaha_view_base
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
<script src="/assets/module/front/index/index_control.js"></script>
<link rel="stylesheet" href="/assets/module/front/index/index_control.css">
<? // -------------------------------------------------------------------------- ?>
<div class="control_container index_control_container">
    <? // 按鈕 ?>
    <div class="index_control_button_page control_button_page">
        <div class="control_button index_control_button btn btn-dark" class_name="index_control_page">
            index
        </div>
    </div>
    <? // 內容 ?>
    <div class="index_control_page control_page" class_name="index_control_page">
        <div class="nav_button btn btn-dark">
            nav_box
        </div>   
        <div class="content">
            <div class="left_button btn btn-dark">
                left_box
            </div>  
            <div class="main_box_div">
                <div class="main_button btn btn-dark">
                    main_box
                </div>   
            </div>  
            <div class="right_button btn btn-dark">
                right_box
            </div>  
        </div>   
        <div class="tail_button btn btn-dark">
            tail_box
        </div>     
    </div>
</div>
<div class="control_container index_control_container">
    <? // 按鈕 ?>
    <div class="index_control_button_page control_button_page">
        <div class="control_button index_control_button btn btn-dark" class_name="index_control_page2">
            index2
        </div>
    </div>
    <? // 內容 ?>
    <div class="index_control_page control_page" class_name="index_control_page2">
            <div class="nav_button btn btn-dark">
                nav_box
            </div>   
            <div class="content">
                <div class="left_button btn btn-dark">
                    left_box
                </div>  
                <div class="main_box_div">
                    <div class="main_button btn btn-dark">
                        main_box2
                    </div>   
                </div>  
                <div class="right_button btn btn-dark">
                    right_box
                </div>  
            </div>   
            <div class="tail_button btn btn-dark">
                tail_box
            </div>     
    </div>
</div>
<?
// --------------------------------------------------------------------------
    }
}


