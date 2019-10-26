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

namespace hahaha\view\web\front;

/*
視圖
這是組件(快速使用)，所以採取比較詳細命名
*/
class main_home_overview_view extends \hahaha\hahaha_view_base
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
        $view_ = \hahahalib\hahaha_view::Instance();
        $menu_ = \ha\Menu::Get();
        $system_setting_ = \ha\System_Setting::Get();

// --------------------------------------------------------------------------
?>
<? // [\hahaha\view\module\front\common_home_main_home_view::Instance(), "Index"] 有關聯 iframe ?>
<? // 內頁，iframe，有必要才分obj寫 ?>

<? // ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            $view_->View([
                // 模組
                [\hahaha\view\web\common\main_view::Instance(), "Meta"],
                // [\hahaha\view\web\common\sub_view::Instance(), "Meta"],
                [\hahaha\view\web\common\main_view::Instance(), "Css"],
                // [\hahaha\view\web\common\sub_view::Instance(), "Css"],
                [\hahaha\view\web\common\main_view::Instance(), "Script"],
                // [\hahaha\view\web\common\sub_view::Instance(), "Script"],
            ]);
            
        ?>
        <script src="/assets/plugin/carousel/water_wheel_carousel/water_wheel_carousel.min.js"></script>

        <link rel="stylesheet" href="/assets/web/front/common/home/main_home/overview/main_home_overview.css">
        <script src="/assets/web/front/common/home/main_home/overview/main_home_overview.js"></script>
        <script>
            $(function(){     
                            
            });
            
        </script>
        <style>
            
            
        </style>
        <style type="text/css">
            
			
        </style>
        
        
    </head>

    <body>     
        <div class="home_overview_title">
            <h1 style="font-weight:bold;">Overview</h1>
            <hr class="hr_title" />
            <h3 style="font-weight:bold;">hahaha™ 是個人網頁，用來放個人的東西 & 找工作用!!</h3>
            裡面有個人資訊 & 半成品 & 資源
            <hr class="hr_title" />
        </div> 
        <p>
        <? // 間隔 ?>
        <div class="home_overview_space">
            <br><br>
        </div>
        
        <div class="row home_overview_content">
            <? foreach($menu_->item_white as $key => &$value) : ?>
                <div class="col-sm item btn-light">
                    <? // 示意圖 ?>
                    <? if($value['image'] == null) : ?>
                        <img src="#">
                    <? else : ?>
                        <img src="<?= \ha::url($value['image']) ?>">
                    <? endif; ?>
                    <br/> 
                    <? // 標題 ?>
                    <div style="background: rgba(190,255,190,0.5);">  
                        <hr class="hr1"/>
                        <h3 style="font-weight:bold;"><?= $value['title'] ?>
                            <? if($value['url'] == null) : ?>
                                <?
                                /*
                                <a href="#" target="_parent">
                                <div class="btn btn-dark" style="position:relative;float:right;width:100px;height:40px;margin:0 15px 0 0">
                                    more...
                                </div>
                                */
                                ?>
                            <? else : ?>
                                <a href="<?= \ha::url($value['url'])?>" target="_parent">
                                    <div class="btn btn-dark" style="position:relative;float:right;width:100px;height:40px;margin:0 15px 0 0">
                                        more...
                                    </div>
                                </a>
                            <? endif; ?>
                        </h3>
                        <hr class="hr1"/>
                    </div>  
                    
                    <? // 註解 ?>
                    <?= $value['describe'] ?>
                    <? // 簡短說明 ?>
                    <hr class="hr1"/>
                    <?= $value['content'] ?>
                    <hr class="hr1"/> 
                </div>                         
            <? endforeach; ?>            
        </div>  

        <div class="home_overview_space">
            <br><br>
        </div>

        <div class="row home_overview_content2">
            <? foreach($menu_->item_black as $key => &$value) : ?>
                <div class="col-sm item btn-dark">
                    <? // 示意圖 ?>
                    <? if($value['image'] == null) : ?>
                        <img src="#">
                    <? else : ?>
                        <img src="<?= \ha::url($value['image']) ?>">
                    <? endif; ?>
                    <br/> 
                    <? // 標題 ?>
                    <div style="background: rgba(190,255,190,0.5);">  
                        <hr class="hr2"/>
                        <h3 style="font-weight:bold;"><?= $value['title'] ?>
                            <? if($value['url'] == null) : ?>
                                <?
                                /*
                                <a href="#" target="_parent">
                                <div class="btn btn-dark" style="position:relative;float:right;width:100px;height:40px;margin:0 15px 0 0">
                                    more...
                                </div>  
                                */
                                ?>
                            <? else : ?>
                                <a href="<?= \ha::url($value['url']) ?>" target="_parent">
                                <div class="btn btn-dark" style="position:relative;float:right;width:100px;height:40px;margin:0 15px 0 0">
                                    more...
                                </div>
                            <? endif; ?>
                                
                            </a>
                        </h3>
                        <hr class="hr2"/>
                    </div>  
                    <? // 註解 ?>
                    <?= $value['describe'] ?>
                    <? // 簡短說明 ?>
                    <hr class="hr2"/>
                    <?= $value['content'] ?>
                    <hr class="hr2"/> 
                </div>
            <? endforeach; ?>   
        </div> 

        <div class="home_overview_space">
            <br><br>&nbsp;
        </div>

        <div class="home_overview_title">
            <h3 style="font-weight:bold;">模組化練習</h3>
            <hr class="hr_title" />
            練習模組化用，侵權請告知<p>
            hahaha0417@hotmail.com
            <hr class="hr_title" />
        </div> 
        <p>

        <div class="row home_overview_content">
            <? foreach($menu_->item_secondary as $key => &$value) : ?>
                <div class="col-sm item btn-secondary">
                    <? // 示意圖 ?>
                    <? if($value['image'] == null) : ?>
                        <img src="#"></img>
                    <? else : ?>
                        <img src="<?= \ha::url($value['image']) ?>"></img>
                    <? endif; ?>
                    <br/> 
                    <? // 標題 ?>
                    <div style="background: rgba(220,255,220,0.5);">  
                        <hr class="hr1"/>
                        <h3 style="font-weight:bold;"><?= $value['title'] ?>
                            <? if($value['url'] == null) : ?>
                                <?
                                /*
                                <a href="#" target="_parent">
                                <div class="btn btn-dark" style="position:relative;float:right;width:100px;height:40px;margin:0 15px 0 0">
                                    more...
                                </div>  
                                */
                                ?>
                            <? else : ?>
                                <a href="<?= \ha::url($value['url']) ?>" target="_parent">
                                <div class="btn btn-dark" style="position:relative;float:right;width:100px;height:40px;margin:0 15px 0 0">
                                    more...
                                </div>
                                </a>
                            <? endif; ?>
                        </h3>
                        <hr class="hr1"/>
                    </div>  
                    <? // 註解 ?>
                    <?= $value['describe'] ?>
                    <? // 簡短說明 ?>
                    <hr class="hr1"/>
                    <?= $value['content'] ?>
                    <hr class="hr1"/> 
                </div>                         
            <? endforeach; ?>       
        </div>  

        <div class="home_overview_title">
            <h3 style="font-weight:bold;">測試頁面</h3>
            <hr class="hr_title" />
            將模組組合練習，侵權請告知<p>
            hahaha0417@hotmail.com
            <hr class="hr_title" />
        </div> 
        <p>

        <div class="row home_overview_content">
            <? foreach($menu_->item_info as $key => &$value) : ?>
                <div class="col-sm item btn-info">
                    <? // 示意圖 ?>
                    <? if($value['image'] == null) : ?>
                        <img src="#"></img>
                    <? else : ?>
                        <img src="<?= \ha::url($value['image']) ?>"></img>
                    <? endif; ?>
                    <br/> 
                    <? // 標題 ?>
                    <div style="background: rgba(220,255,220,0.5);">  
                        <hr class="hr1"/>
                        <h3 style="font-weight:bold;"><?= $value['title'] ?>
                            <? if($value['url'] == null) : ?>
                                <?
                                /*
                                <a href="#" target="_parent">
                                <div class="btn btn-dark" style="position:relative;float:right;width:100px;height:40px;margin:0 15px 0 0">
                                    more...
                                </div> 
                                */
                                ?>
                            <? else : ?>
                                <a href="<?= \ha::url($value['url']) ?>" target="_parent">
                                    <div class="btn btn-dark" style="position:relative;float:right;width:100px;height:40px;margin:0 15px 0 0">
                                        more...
                                    </div>
                                </a>
                            <? endif; ?>
                        </h3>
                        <hr class="hr1"/>
                    </div>  
                    <? // 註解 ?>
                    <?= $value['describe'] ?>
                    <? // 簡短說明 ?>
                    <hr class="hr1"/>
                    <?= $value['content'] ?>
                    <hr class="hr1"/> 
                </div>                         
            <? endforeach; ?>         
        </div>  

        <div class="home_overview_space">
            <br><br>
        </div>

        <div class="carousel_content">
            <h1 style="text-align:center;">
                網路抓的圖，侵權請告知<br>
                hahaha0417@hotmail.com     
            </h1>
            <div id="water_wheel_carousel">
                <? foreach($menu_->item_pic as $key => &$value) : ?>
                    <? if($value['image'] == null) : ?>
                        <img src="#" id="item-<?= $key ?>" /> 
                    <? else : ?>
                        <img src="<?= \ha::url($value['image']) ?>" id="item-<?= $key ?>" /> 
                    <? endif; ?>                                
                <? endforeach; ?>                
            </div>
            <div class="home_overview_space">
                <br>&nbsp;
            </div>
            <div id="water_wheel_carousel_button">
                <a href="#" id="water_wheel_carousel_prev" class="btn btn-dark">前一幅</a>　
                <a href="#" id="water_wheel_carousel_next" class="btn btn-dark">下一幅</a>
            </div>            
        </div>
        <div class="home_overview_space">
            <br><br>&nbsp;
        </div>
    </body>
    <script>
        $(function(){
            // 最後一次載入
            lazyload();      
                            
        });
        
    </script>
</html>


<?
// --------------------------------------------------------------------------
    }
}

        

        
        
        
   
