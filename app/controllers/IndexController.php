<?php

namespace hahaha\controller;

/*
控制器
*/
class IndexController
{
    function __CONSTRUCT()
    {

    }

    public function index($a, $b, $c = 1)
    {
        echo '進入controller' . "</br>"; 
        echo $a . ' | ' . $b . "</br>";         
        echo $c . "</br>"; ;
        echo "<div style='color:red;'>xxx</div>";

        // 因為進到到客製化區域，可以比較慢
        //$view = \hahahalib\hahaha_view::Instance();

        // 記得一組default
        // 參數先走天表
        // view分類 
        /*
        $view->View(
            ['xxx','ccc','vvv'],  // 分類找路徑
            ['a','b','c'],          // 對應資料夾
            ['v1','v2','v3']               // require檔名
        );
        // 會紀錄上次設定的View
        $view->iView(
            ['xxx','ccc','vvv'],  // 分類找路徑
            ['a','b','c'],          // 對應資料夾
            ['v1','v2','v3']               // require檔名
        );
        */

        // Widgit 用到才載入
        // Plugin 要先決定載入插件(填表)，執行前會先處理對應表，執行時會查表，看有什麼對應天表的，載入，載入有兩個以上，表一樣有兩種，覆蓋或者是不覆蓋，
        // 
        /*
        // 重要 : 先直接渲染，為了不要影響controller，有空寫View先渲染到ob_start，在一次吐出來，
        // 寫一個function開關ob_start，View運行過程預設是開，Controller則是關
        // 假View class bew後跑class外的程式跑下方程式
        $view->Run([
            "\hahaha\view\Index1View",
            "\hahaha\view\Index2View",
            "\hahaha\view\Index3View"
        ]);
        $view->iRun([
            "",
            "\hahaha\view\Index2View",
            ""
        ]);
        */
        /*
        // 傳參進callback
        // https://stackoverflow.com/questions/35035355/how-to-pass-argument-in-callback-function-in-php
        $view->Callback(function(){
            \hahaha\view\IndexView::Instance()->xxx();

        });
        */
        /*
        // --------------------------------------------------------------------------
        // View
        // --------------------------------------------------------------------------
        $view->start();
        // --------------------------------------------------------------------------        
        \hahaha\view\IndexView::Instance()->xxx();
        // --------------------------------------------------------------------------
        $view->end();
        // --------------------------------------------------------------------------
        */

        //$a = "xxx";
        /*
        // --------------------------------------------------------------------------
        // View(html)
        // --------------------------------------------------------------------------
        $view->start();
        // --------------------------------------------------------------------------
        ?>
        <? // -------------------------------------------------------------------------- ?>

        <?= $a ?>
        ccc


        <? // -------------------------------------------------------------------------- ?>
        <?php
        // --------------------------------------------------------------------------
        $view->end();
        // --------------------------------------------------------------------------
        */
        /*
?>
eeee
<?php
*/
    }

    public function index1()
    {
        echo "OGC";
    }


    

}
?>
