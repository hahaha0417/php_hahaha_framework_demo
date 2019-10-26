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

namespace hahaha\view\web\common;

/*
視圖
*/
class main_view extends \hahaha\hahaha_view_base
{
    use \hahahalib\hahaha_instance_trait;

	function __construct()
	{   
        // 找不到method時要用
		parent::__construct();
	}

    /*
    Css
    */
    public function Script($view)
    {
// --------------------------------------------------------------------------
        $system_setting_ = \ha\System_Setting::Get();        

?>
<? //Jquery ?>
<? if(!$system_setting_->Debug->Enabled) : ?>
    <? //compress ?>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js<?= $system_setting_->Asset->Version ?>"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js<?= $system_setting_->Asset->Version ?>"></script>
    <? //<script src="https://code.jquery.com/mobile/1.5.0-alpha.1/jquery.mobile-1.5.0-alpha.1.min.js?v=<?= $system_setting_->Asset->Version ? >"></script> ?>
    <script src="https://code.jquery.com/color/jquery.color-2.1.2.min.js<?= $system_setting_->Asset->Version ?>"></script>
<? else : ?>
    <? //uncompress ?>
    <script src="https://code.jquery.com/jquery-3.3.1.js<?= $system_setting_->Asset->Version ?>"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js<?= $system_setting_->Asset->Version ?>"></script>
    <? //<script src="https://code.jquery.com/mobile/1.5.0-alpha.1/jquery.mobile-1.5.0-alpha.1.js?v=<?= $system_setting_->Asset->Version ? >"></script> ?>
    <script src="https://code.jquery.com/color/jquery.color-2.1.2.js<?= $system_setting_->Asset->Version ?>"></script>
<? endif; ?>

<? // Bootstrap 4 ?>
<? //<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js?v=\>?= $system_setting_->Asset->Version ? >" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js<?= $system_setting_->Asset->Version ?>" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css<?= $system_setting_->Asset->Version ?>" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<?
// Bootstrap.min.js會自動啟動session，所以我在這邊事先啟動，避免後面又啟動一次 
\ha\Session::Start();
?>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js<?= $system_setting_->Asset->Version ?>" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<? // Fontawesome ?>
<? //不用加這個，他會改成SVG樣式 ?>
<? //<script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js?v=< ?= $system_setting_->Asset->Version ? >" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script> ?>

<? // lazyload ?>
<script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-beta.2/lazyload.js<?= $system_setting_->Asset->Version ?>"></script>

<?
// --------------------------------------------------------------------------
    }

    /*
    Css
    */
    public function Css($view)
    {
        $system_setting_ = \ha\System_Setting::Get();
// --------------------------------------------------------------------------
?>
<? //Jquery ?>

<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css<?= $system_setting_->Asset->Version ?>">
<? //<link rel="stylesheet" href="https://code.jquery.com/mobile/1.5.0-alpha.1/jquery.mobile-1.5.0-alpha.1.min.css?v=<?= $system_setting_->Asset->Version ? >"> ?>
<? //<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css?v=< ?= $system_setting_->Asset->Version ? >"> ?>
<? //Bootstrap 4 ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css<?= $system_setting_->Asset->Version ?>" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<? //Fontawesome ?>
<? //兩個都要用，圖的代號好像有差別，上面好像CSS有問題 ?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css<?= $system_setting_->Asset->Version ?>" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
<? //<link rel="stylesheet" type="text/css" href="http://www.jq22.com/jquery/font-awesome.4.6.0.css?v=<\? $system_setting_->Asset->Version ? >"> 太慢 ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css<?= $system_setting_->Asset->Version ?>" />
<? // ?>
<link rel="stylesheet" href="/assets/web/common/base.css">
<?
// --------------------------------------------------------------------------
    }

    /*
    Css
    */
    public function Meta($view)
    {
        $system_setting_ = \ha\System_Setting::Get();
// --------------------------------------------------------------------------
?>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<!--<meta content="text/html; charset=gb2312" http-equiv="Content-Type" />-->
<meta name="keyword" content="hahaha" /> 
<meta name="description" content="hahaha個人網站" />
<meta name="author" content="hahaha" />

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title>hahaha網站</title>
<link rel="shortcut icon" type="image/x-icon" href="/image/hahaha.ico">
<? //Bootstrap ?>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?
// --------------------------------------------------------------------------
    }

}



 




