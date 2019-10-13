<?php

namespace hahaha\view;

/*
控制器
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
        echo 333;
    }

    /*
    phtml & 第二層
    */
    public function Index2($view)
    {
        // 使用phtml
        $this->Require('index_view');
        $view->View([
            [\hahaha\view\index_view::Instance(), "Index5"],
        ]);
           
       
    }

    /*
    參數
    */
    public function Index3($view)
    {
        // 這裡為客製化內容，所以可以用快捷方法使用，
        // $global_ = \ha\_Global::Get();
        // $parameter_ = \ha\Parameter::Get();
        // $menu_ = \ha\Menu::Get();
        // 怕太常可以取短一點，例如上面三者$_g_，$_p_，$_m_
        $_g_ = \ha\_Global::Get();
        $_p_ = \ha\Parameter::Get();
        $_m_ = \ha\Menu::Get();
        echo $_m_->aaa;
        global $aaa;
        echo $aaa;
    }

    /*
    模擬第二層，請小心發生遞迴
    */
    public function Index5($view)
    {
        echo 555;
    }


    

}

/*
no nethod時的用法
*/
/*
$view是主要view
$self是上面的view
命名樣式
namespace + class + class method
*/
function Hahaha_View_Index_View_Index4($view, $self)
{ 
    echo 777;
}