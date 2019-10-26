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
class common_home_main_home_view extends \hahaha\hahaha_view_base
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
<script src="/assets/plugin/banner/banner/banner.js<?= $system_setting_->Asset->Version ?>"></script>
<link rel="stylesheet" href="/assets/plugin/banner/banner/banner.css<?= $system_setting_->Asset->Version ?>">

<script src="/assets/plugin/nav/follow_under_line_nav/follow_under_line_nav.js<?= $system_setting_->Asset->Version ?>"></script>
<link rel="stylesheet" href="/assets/plugin/nav/follow_under_line_nav/follow_under_line_nav.css<?= $system_setting_->Asset->Version ?>">
<? //  ?>

<script src="/assets/module/front/common/home/main_home/main_home.js<?= $system_setting_->Asset->Version ?>"></script>
<link rel="stylesheet" href="/assets/module/front/common/home/main_home/main_home.css<?= $system_setting_->Asset->Version ?>">
<? //  ?>

<div class="plugin_banner">
    <img class="plugin_banner_change plugin_banner_pre" src="/assets/plugin/banner/banner/pre.png">
    <img class="plugin_banner_change plugin_banner_next" src="/assets/plugin/banner/banner/next.png">
    
    <div class="plugin_banner_cirbox">
        <? foreach($menu_->pic_board as $key => &$value) : ?>
            <? if($key == 0) : ?>
                <div class="plugin_banner_cir plugin_banner_cr"></div>
            <? else : ?>
                <div class="plugin_banner_cir"></div>
            <? endif; ?> 
        <? endforeach; ?> 
    </div>
    <div class="plugin_banner_imgbox">
        <? foreach($menu_->pic_board as $key => &$value) : ?>
            <? if($key == 0) : ?>
                <img class="plugin_banner_img plugin_banner_im" src="<?= \ha::url($value['image']) ?>" style="display: inline;">
            <? else : ?> 
                <img class="plugin_banner_img" src="<?= \ha::url($value['image']) ?>" style="display: none;">
            <? endif; ?> 
        <? endforeach; ?> 
    </div>	
</div>

<? // 待修改:當往下捲動超過時黏在導航  ?>
<div class="plugin_follow_under_line_nav">
    <div class="bottomLine"></div>
    <ul class="nav home_nav">
        <? foreach($menu_->nav as $key => &$value) : ?>
            <? if($value['order'] != -1) : ?>
                <? if($key == 0) : ?>
                    <li class="item selected_nav" name="<?= $value['titleName'] ?>" url="<?= \ha::url($value['url']) ?>"><? $value['title'] ?></li>
                <? else : ?> 
                    <li class="item" name="<?= $value['titleName'] ?>" url="<?= \ha::url($value['url']) ?>"><?= $value['title'] ?></li>
                <? endif; ?> 
            <? endif; ?> 
        <? endforeach; ?> 
    </ul>
</div>
<? // 如需改成用ajax撈，須建立管理器，管理js & css在頭部不重複，目前沒要這樣做  ?>
<? // iframe無法用ajax取得頁面內容替換  ?>

<iframe class="content_frame home_content_frame" loaded="0" id="home_content_frame" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="/overview">
</iframe>

<?
// --------------------------------------------------------------------------
    }
}


