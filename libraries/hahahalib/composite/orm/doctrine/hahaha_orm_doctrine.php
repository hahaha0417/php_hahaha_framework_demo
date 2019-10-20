<?php

/*
Copyright (c) Doctrine Project

Permission is hereby granted, free of charge, to any person obtaining a copy of
this software and associated documentation files (the "Software"), to deal in
the Software without restriction, including without limitation the rights to
use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies
of the Software, and to permit persons to whom the Software is furnished to do
so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
*/

/*

{{-- 原始 : hahaha --}}
{{-- 維護 :  --}}
{{-- 指揮 :  --}}
{{-- ---------------------------------------------------------------------------------------------- --}}
{{-- 決定 : name --}}
{{-- 
    ----------------------------------------------------------------------------
    說明 : 
    ----------------------------------------------------------------------------   
    
    ----------------------------------------------------------------------------
--}}
{{-- ---------------------------------------------------------------------------------------------- --}}
*/

namespace hahahalib;

/*
// --------------------------------------------------------------------------
{
    "require": {
        "doctrine/orm": "^2.6.2",
        "symfony/yaml": "2.*"
    },
    "autoload": {
        "psr-0": {"": "src/"}
    }
}
composer update --no-dev
https://www.doctrine-project.org/projects/orm.html *
https://github.com/doctrine/orm
License MIT
// --------------------------------------------------------------------------
https://pecl.php.net/package/redis/4.0.2/windows
php.ini
extension=redis
NTS FastCGI 
TS 一般CGI
// --------------------------------------------------------------------------
*/

// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

/*
doctrine 3 comming
有需要再切過去，目前先用2.6
*/
class hahaha_orm_doctrine
{
    use \hahahalib\hahaha_instance_trait;

    /*
    doctrine entity manager
    */
    public $Entity_Manager_ = NULL;

    function __construct()
    {

     
    }

    public function Initial()
    {

    }

    /*
    基本使用方法
    */
    public function Initial_Base()
    {
        // https://www.doctrine-project.org/projects/doctrine-orm/en/2.6/tutorials/getting-started.html#getting-started-with-doctrine

        // Create a simple "default" Doctrine ORM configuration for Annotations
        $is_dev_mode_ = true;
        $proxy_dir_ = null;
        $cache_ = null;
        $use_simple_annotation_reader_ = false;
        $config_ = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $is_dev_mode_, $proxy_dir_, $cache_, $use_simple_annotation_reader_);
        // or if you prefer yaml or XML
        //$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
        //$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

        // database configuration parameters
        // https://www.cnblogs.com/yjf512/p/3375614.html
        $conn_ = array(
            'driver' => 'pdo_sqlite',
            'path' => __DIR__ . '/db.sqlite',
        );

        // obtaining the entity manager
      //  $this->Entity_Manager_ = EntityManager::create($conn_, $config_);
    }
}