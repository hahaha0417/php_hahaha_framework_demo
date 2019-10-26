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
*/
class index_view extends \hahaha\hahaha_view_base
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
        $system_setting_ = \ha\System_Setting::Get();

// --------------------------------------------------------------------------
?>
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
    <link rel="stylesheet" href="/assets/web/front/index.css<?= $system_setting_->Asset->Version ?>">
    <script src="/assets/web/front/index.js<?= $system_setting_->Asset->Version ?>"></script>

    <script>
        $(function(){    
                
        });
        
    </script>
    <style>
        .container {
            /* https://pjchender.blogspot.tw/2017/10/bs-bootstrap-4-custom-container-and.html */
            /* 有預設樣式，要調整 */
            margin: 0;
            padding: 0;
            max-width: 100%;
        }
        
    </style>
    <?php
    // 基於現在瀏覽器下載是並行的，因此程式碼檔案太多並不會嚴重影響效能，因此盡可能的拆成分散式模組
    ?>

    </head>
    <body>     
    <?php
    // --------------------------------------------------------------------------
    // nav
    // --------------------------------------------------------------------------
    // @include("fast_use.front.common.nav.main_nav") 
    $view_->View([
        // 模組
        [\hahaha\view\module\front\common_nav_main_nav_view::Instance(), "Index"],
    ]);
    // --------------------------------------------------------------------------
    ?>         
        <div id="top_bar">            
        </div>
        <?php // -------------------------------------------------------------------------- ?> 
        <div id="content" >
            <div id="left_box">
                <?php
                // --------------------------------------------------------------------------
                // useful
                // --------------------------------------------------------------------------
                // @include("fast_use.front.common.useful.main_useful")                  
                // --------------------------------------------------------------------------
                ?>        
            </div>
            <div id="main_box">
                <?php
                // --------------------------------------------------------------------------
                // home
                // --------------------------------------------------------------------------
                // @include("fast_use.front.common.home.main_home")  
                $view_->View([
                    // 模組
                    [\hahaha\view\module\front\common_home_main_home_view::Instance(), "Index"],
                ]);
                // --------------------------------------------------------------------------
                ?>    
                <?php
                // --------------------------------------------------------------------------
                // display
                // --------------------------------------------------------------------------
                // @include("fast_use.front.common.display.main_display")
                // --------------------------------------------------------------------------
                ?>   
                <?php
                // --------------------------------------------------------------------------
                // tail
                // --------------------------------------------------------------------------
                // @include("fast_use.front.common.tail.main_tail")
                $view_->View([
                    // 模組
                    [\hahaha\view\module\front\common_tail_main_tail_view::Instance(), "Index"],
                ]);
                // --------------------------------------------------------------------------
                ?>  
            </div>
            <div id="right_box">
                <?php
                // --------------------------------------------------------------------------
                // relation
                // --------------------------------------------------------------------------
                // @include("fast_use.front.common.relation.main_relation")  
                // --------------------------------------------------------------------------
                ?>  
            </div>
        </div>
        <?php
        // --------------------------------------------------------------------------
        // relation
        // --------------------------------------------------------------------------
        // 整合功能
        // 頁面
        // @include("fast_use.front.index.index_control") 
        $view_->View([
            // 模組
            [\hahaha\view\module\front\index_index_control::Instance(), "Index"],
        ]);
        // 容器
        // @include("fast_use.front.integrate.control.main_control")  
        $view_->View([
            // 模組
            [\hahaha\view\module\integrate\control_main_control::Instance(), "Index"],
        ]);
        // --------------------------------------------------------------------------
        ?>  
    </body>
    <script>
        $(function(){
            // 最後一次載入
            lazyload();      
                            
        });        
    </script>
</html>
<?php
// --------------------------------------------------------------------------
    }

 

    

}
