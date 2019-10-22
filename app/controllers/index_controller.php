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
        $app_ = \hahaha\hahaha_application::Instance();
        $doctrine_ = \hahahalib\hahaha_orm_doctrine::Instance();
        // 這可相對路徑，但是注意檔案在哪裡
        $em_ = $doctrine_->Initial_Config('test_oring', $app_->Root_ . '/app/models/A');
            /*
        // 基本用法
        $class_ = new \oring\A_Class();
        $class_->setBlock(44);
        $class_->setItem(44);
        $class_->setId(44);
        $class_->setName(44);
        $class_->setTitle(44);
        $class_->setTitleContent(44);
        $class_->setUrl(44);
        $class_->setComment(44);
        $class_->setCommentDetail(44);
        $class_->setCreateTime(new \DateTime('2017-05-17 18:00:00'));
        $class_->setUpdateTime(new \DateTime('2017-05-17 18:00:00'));
        $em_->persist($class_);
        $em_->flush();
        // 使用方法
        $class_res_ = $em_->getRepository('\oring\A_Class');
        $classes_ = $class_res_->findAll();

        echo "<pre>";
        var_dump($classes_);

        // https://www.doctrine-project.org/projects/doctrine-orm/en/2.6/reference/query-builder.html
        $query = $em_->createQueryBuilder();
        $data_ = $query_->select('c')
            ->from('\oring\A_Class', 'c')
            ->where('c.no= :id')
            ->setParameter('id', 1)
            ->getQuery()
            ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        */
        
            
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
