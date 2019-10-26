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
class common_tail_main_tail_view extends \hahaha\hahaha_view_base
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
        $system_setting_ = \ha\System_Setting::Get();

// --------------------------------------------------------------------------
?>
<script src="/assets/module/front/common/tail/main_tail/main_tail.js<?= $system_setting_->Asset->Version ?>"></script>
<link rel="stylesheet" href="/assets/module/front/common/tail/main_tail/main_tail.css<?= $system_setting_->Asset->Version ?>">


<div class="footer_bar" id="footer_bar">
    <div> 
        <a href="#" title="iTW" class="logo" style="display: table;margin:auto;">
            <img data-src="<?= "/image/iTW.png" ?>" src="#" alt="hahaha" width="100px" height="100px" class="lazyload" >
        </a>
        <div>
            <ul class="reset">
                <? foreach($menu_->tail as $key => &$value) : ?>
                    <li class="reset">
                        <a href="<?= $value['url'] ?>" title="<?= $value['title'] ?>" data-tooltip="hide"><?= $value['content'] ?>
                        </a>
                    </li>
                <? endforeach; ?>
                <?
                /*
                <li class="reset">
                    <a href="{{$tail['url']}}" title="{{$tail['title']}}" data-tooltip="hide"><?= $tail['content'] ?>
                    </a>
                </li>
                */
                ?>
            </ul>
        </div>
    </div>
</div>

<footer>            
    <div class="copyright"> 
        <span>Copyright ©hahaha 個人製作
        </span> 
        <span>All Rights Reserved. &nbsp;
        </span> 
        <a href="#" title="網頁設計 hahaha" target="_blank">Design by hahaha
        </a>
    </div>        
</footer>
<?
// --------------------------------------------------------------------------
    }
}

