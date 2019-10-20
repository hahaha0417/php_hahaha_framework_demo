<?php

namespace hahaha\controller;

/*
控制器
*/
class index_controller extends \hahaha\hahaha_controller_base
{
    function __CONSTRUCT()
    {

    }

    public function Index()
    {
        /* 
        echo '進入controller' . "</br>"; 
        echo "<div style='color:red;'>xxx</div>";

        $view = \hahahalib\hahaha_view::Instance();
        $menu_ = \ha\Menu::Get();
        $menu_->aaa = 'aaa';
        $view->View([
            [\hahaha\view\index_view::Instance(), "Index"],
            [\hahaha\view\index_view::Instance(), "Index2"],
            [\hahaha\view\index_view::Instance(), "Index3"],
            [\hahaha\view\index_view::Instance(), "Index4"],
        ]);
        */
        /*
        \ha::t(['a','b']);
        echo '無參數<br>';
        var_dump(\ha::t('c'));
        echo '<br>';
        echo '無填入參數<br>';
        var_dump(\ha::t('d'));
        echo '<br>';
        echo '有填入參數<br>';
        var_dump(\ha::t('d', ['a','b']));
        echo '<br>';
        echo '<br>';
        */
   
        // Doctrine
        $doctrine_ = \hahahalib\hahaha_orm_doctrine::Instance();
        $doctrine_->Initial_Base();
      
    }

    public function Index1()
    {
        echo "OGC";
    }

    public function Index2($a, $b, $c = 1)
    {
        echo '進入controller' . "</br>"; 
        echo $a . ' | ' . $b . "</br>";         
        echo $c . "</br>"; ;
        echo "<div style='color:red;'>xxx</div>";
        echo "<pre>";
        
        

    }
    

}
