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

namespace hahaha\controller\front;

/*
控制器
*/
class index_controller extends \hahaha\controller\front\base_controller
{
    use \hahahalib\hahaha_instance_trait;

    function __construct()
    {
        // 設定轉換Port
        \ha::$Http_Port = 8081;
        \ha::$Https_Port = 8443;
    }

    public function get_nav_list(&$nav_list){
        $enabled = "disabled";
        $visible = "false";
        $nav_list = array(  
            'item_title' => array(  
                'enabled' => 'true',
                'visible' => 'true', 
                'type' => 'item', 
                'item' => 'item_home',   
                'name' => 'title',  
                'title' => 'hahaha',             
                'url' => '#',
                'icon' => "fas fa-comment",
                // 'target' => '_self',
                // 'background' => 'rgba(190,155,90,0.5)',
                // 'active' => 'true',
                
                
                // 前端首頁
            ),
            'item_sub_content' => array(
                'enabled' => 'true',
                'visible' => 'true', 
                'type' => 'menu',   
                'item' => 'item_sub_content',
                'name' => 'sub_content',  
                'title' => '',                
                'url' => '#',
                'icon' => "fa-angle-double-down",
                // 'target' => '_self',
                // 'background' => 'rgba(190,155,90,0.5)',
                // 'active' => 'true',
                'menu' => array(  
                    'product' => [
                        'enabled' => 'true',
                        'visible' => 'true', 
                        'type' => 'menu',
                        'item' => 'category',
                        'url' => 'product/',
                        'name' => 'product',
                        'title' => '產品',
                        //'icon' => 'fa-angle-double-down',
                        'menu' => array(  
                            // ----------------------------------------------------------
                            'category1' => [
                                'enabled' => 'true',
                                'visible' => 'true', 
                                'type' => 'item',
                                'item' => 'category',
                                'url' => null,
                                'name' => 'Fast Development Tools',
                                'title' => 'Fast Development Tools',
                                //'icon' => 'fa-angle-double-down',
                            ], 
                            // ----------------------------------------------------------
                            'item_oring' => [
                                'enabled' => 'true',
                                'visible' => 'true', 
                                'type' => 'item',
                                'item' => 'category_item',
                                'url' => '/product/aoi/oring',
                                'name' => 'Oring',
                                'title' => 'Oring',
                                //'icon' => 'fa-angle-double-down',
                            ], 
                            // 'item_hahahalib' => [
                            //     'enabled' => 'true',
                            //     'visible' => 'true', 
                            //     'type' => 'item',
                            //     'item' => 'category_item',
                            //     'url' => '/product/lib/hahahalib',
                            //     'name' => 'hahahalib',
                            //     'title' => 'hahahalib',
                            //     //'icon' => 'fa-angle-double-down',
                            // ], 
                            // 'item_other' => [
                            //     'enabled' => 'true',
                            //     'visible' => 'true', 
                            //     'type' => 'item',
                            //     'item' => 'category_item',
                            //     'url' => '/product',
                            //     'name' => 'Other',
                            //     'title' => 'Other',
                            //     //'icon' => 'fa-angle-double-down',
                            // ], 
                            // ----------------------------------------------------------
                            'category2' => [
                                'enabled' => 'true',
                                'visible' => 'true', 
                                'type' => 'item',
                                'item' => 'category',
                                'url' => null,
                                'name' => 'Software',
                                'title' => 'Software',
                                //'icon' => 'fa-angle-double-down',
                            ], 
                            // ----------------------------------------------------------
                            'item_aoi' => [
                                'enabled' => 'true',
                                'visible' => 'true', 
                                'type' => 'item',
                                'item' => 'category_item',
                                'url' => '/product/aoi',
                                'name' => 'AOI',
                                'title' => 'AOI',
                                //'icon' => 'fa-angle-double-down',
                            ], 
                            // 'item_obs' => [
                            //     'enabled' => 'true',
                            //     'visible' => 'true', 
                            //     'type' => 'item',
                            //     'item' => 'category_item',
                            //     'url' => '/product/obs',
                            //     'name' => 'OBS iForm',
                            //     'title' => 'OBS iForm',
                            //     //'icon' => 'fa-angle-double-down',
                            // ], 
                            // 'item_other' => [
                            //     'enabled' => 'true',
                            //     'visible' => 'true', 
                            //     'type' => 'item',
                            //     'item' => 'category_item',
                            //     'url' => '/product',
                            //     'name' => 'Other',
                            //     'title' => 'Other',
                            //     //'icon' => 'fa-angle-double-down',
                            // ], 
                            // ----------------------------------------------------------
                            // 'category3' => [
                            //     'enabled' => 'true',
                            //     'visible' => 'true', 
                            //     'type' => 'item',
                            //     'item' => 'category',
                            //     'url' => null,
                            //     'name' => 'Custom Design',
                            //     'title' => 'Custom Design',
                            //     //'icon' => 'fa-angle-double-down',
                            // ], 
                            // // ---------------------------------------------------------- 
                            // 'item_win_form' => [
                            //     'enabled' => 'true',
                            //     'visible' => 'true', 
                            //     'type' => 'item',
                            //     'item' => 'category_item',
                            //     'url' => '/product/win_form',
                            //     'name' => 'Win Form',
                            //     'title' => 'Win Form',
                            //     //'icon' => 'fa-angle-double-down',
                            // ],                            
                            // 'item_web' => [
                            //     'enabled' => 'true',
                            //     'visible' => 'true', 
                            //     'type' => 'item',
                            //     'item' => 'category_item',
                            //     'url' => '/product/web',
                            //     'name' => 'Web',
                            //     'title' => 'Web',
                            //     //'icon' => 'fa-angle-double-down',
                            // ],                             
                            // ----------------------------------------------------------
                            // ----------------------------------------------------------
                            // ----------------------------------------------------------
                        ),
                    ],                     
                    'device' => [
                        'enabled' => 'true',
                        'visible' => 'true', 
                        'type' => 'menu',
                        'item' => 'category',
                        'url' => 'device/',
                        'name' => 'device',
                        'title' => '設備',
                        //'icon' => 'fa-angle-double-down',
                        'menu' => array(  
                            // ----------------------------------------------------------
                            'category1' => [
                                'enabled' => 'true',
                                'visible' => 'true', 
                                'type' => 'item',
                                'item' => 'category',
                                'url' => null,
                                'name' => 'Full Inspection Device',
                                'title' => 'Full Inspection Device',
                                //'icon' => 'fa-angle-double-down',
                            ], 
                            // ----------------------------------------------------------
                            // 'item_vs100' => [
                            //     'enabled' => 'true',
                            //     'visible' => 'true', 
                            //     'type' => 'item',
                            //     'item' => 'category_item',
                            //     'url' => '/device/aoi/full/model/vs100',
                            //     'name' => 'VS100',
                            //     'title' => 'VS100',
                            //     //'icon' => 'fa-angle-double-down',
                            // ], 
                            'item_ha100' => [
                                'enabled' => 'true',
                                'visible' => 'true', 
                                'type' => 'item',
                                'item' => 'category_item',
                                'url' => '/device/aoi/full/model/ha100',
                                'name' => 'HA100',
                                'title' => 'HA100',
                                //'icon' => 'fa-angle-double-down',
                            ], 
                            // 'item_full_inspection' => [
                            //     'enabled' => 'true',
                            //     'visible' => 'true', 
                            //     'type' => 'item',
                            //     'item' => 'category_item',
                            //     'url' => '/device/aoi/full',
                            //     'name' => 'full inspection',
                            //     'title' => 'full inspection',
                            //     //'icon' => 'fa-angle-double-down',
                            // ], 
                            // // ----------------------------------------------------------
                            // 'category2' => [
                            //     'enabled' => 'true',
                            //     'visible' => 'true', 
                            //     'type' => 'item',
                            //     'item' => 'category',
                            //     'url' => null,
                            //     'name' => 'Lead Frame & PCB',
                            //     'title' => 'Lead Frame & PCB',
                            //     //'icon' => 'fa-angle-double-down',
                            // ], 
                            // // ----------------------------------------------------------
                            // 'item_ha100' => [
                            //     'enabled' => 'true',
                            //     'visible' => 'true', 
                            //     'type' => 'item',
                            //     'item' => 'category_item',
                            //     'url' => '/device/aoi/full/model/HA100',
                            //     'name' => 'HA100',
                            //     'title' => 'HA100',
                            //     //'icon' => 'fa-angle-double-down',
                            // ], 
                            // 'item_pcb100' => [
                            //     'enabled' => 'true',
                            //     'visible' => 'true', 
                            //     'type' => 'item',
                            //     'item' => 'category_item',
                            //     'url' => '/device/aoi/pcb/model/PCB100',
                            //     'name' => 'PCB100',
                            //     'title' => 'PCB100',
                            //     //'icon' => 'fa-angle-double-down',
                            // ], 
                            // ----------------------------------------------------------
                            // 'category3' => [
                            //     'enabled' => 'true',
                            //     'visible' => 'true', 
                            //     'type' => 'item',
                            //     'item' => 'category',
                            //     'url' => null,
                            //     'name' => 'Mix Inspection Device',
                            //     'title' => 'Mix Inspection Device',
                            //     //'icon' => 'fa-angle-double-down',
                            // ], 
                            // // ---------------------------------------------------------- 
                            // 'item_eu100' => [
                            //     'enabled' => 'true',
                            //     'visible' => 'true', 
                            //     'type' => 'item',
                            //     'item' => 'category_item',
                            //     'url' => '/device/aoi/mix/model/EU100',
                            //     'name' => 'eu100',
                            //     'title' => 'eu100',
                            //     //'icon' => 'fa-angle-double-down',
                            // ],                            
                            // 'item_mc100_3D' => [
                            //     'enabled' => 'true',
                            //     'visible' => 'true', 
                            //     'type' => 'item',
                            //     'item' => 'category_item',
                            //     'url' => '/device/aoi/mix/model/MC100_3D',
                            //     'name' => 'mc100_3D',
                            //     'title' => 'mc100_3D',
                            //     //'icon' => 'fa-angle-double-down',
                            // ],                             
                            // ----------------------------------------------------------
                            // ----------------------------------------------------------
                            // ----------------------------------------------------------
                        ),
                    ], 
                    // 'resources' => [
                    //     'enabled' => 'true',
                    //     'visible' => 'true', 
                    //     'type' => 'menu',
                    //     'item' => 'categorylist',
                    //     'url' => null,
                    //     'name' => 'resources',
                    //     'title' => '資源',
                    //     //'icon' => 'fa-angle-double-down',
                    //     'menu' => array(  
                    //         'categorylist1' => [
                    //             'menu' => array(  
                    //                 'categorylist1' => [
                    //                     'enabled' => 'true',
                    //                     'visible' => 'true', 
                    //                     'type' => 'item',
                    //                     'item' => 'categorylist',
                    //                     'url' => null,
                    //                     'name' => 'Event X Story X Solution',
                    //                     'title' => 'Event X Story X Solution',
                    //                     //'icon' => 'fa-angle-double-down',
                    //                 ], 
                    //                 // ----------------------------------------------------------
                    //                 'item_event' => [
                    //                     'enabled' => 'true',
                    //                     'visible' => 'true', 
                    //                     'type' => 'item',
                    //                     'item' => 'categorylist_item',
                    //                     'url' => null,
                    //                     'name' => 'Event',
                    //                     'title' => 'Event',
                    //                     //'icon' => 'fa-angle-double-down',
                    //                 ], 
                    //                 'item_story' => [
                    //                     'enabled' => 'true',
                    //                     'visible' => 'true', 
                    //                     'type' => 'item',
                    //                     'item' => 'categorylist_item',
                    //                     'url' => '/device/aoi/full/model/ha100',
                    //                     'name' => 'Story',
                    //                     'title' => 'Story',
                    //                     //'icon' => 'fa-angle-double-down',
                    //                 ], 
                    //                 'item_solution' => [
                    //                     'enabled' => 'true',
                    //                     'visible' => 'true', 
                    //                     'type' => 'item',
                    //                     'item' => 'categorylist_item',
                    //                     'url' => '/device/aoi/full',
                    //                     'name' => 'Solusion',
                    //                     'title' => 'Solusion',
                    //                     //'icon' => 'fa-angle-double-down',
                    //                 ], 
                    //             ),
                    //         ],                            
                    //         'categorylist2' => [
                    //             'menu' => array( 
                    //                 // ----------------------------------------------------------
                    //                 'categorylist2' => [
                    //                     'enabled' => 'true',
                    //                     'visible' => 'true', 
                    //                     'type' => 'item',
                    //                     'item' => 'categorylist',
                    //                     'url' => null,
                    //                     'name' => 'Partner',
                    //                     'title' => 'Partner',
                    //                     //'icon' => 'fa-angle-double-down',
                    //                 ], 
                    //                 // ----------------------------------------------------------
                    //                 'item_sw_partner' => [
                    //                     'enabled' => 'true',
                    //                     'visible' => 'true', 
                    //                     'type' => 'item',
                    //                     'item' => 'categorylist_item',
                    //                     'url' => null,
                    //                     'name' => 'SW Partner',
                    //                     'title' => 'SW Partner',
                    //                     //'icon' => 'fa-angle-double-down',
                    //                 ], 
                    //                 'item_hw_partner' => [
                    //                     'enabled' => 'true',
                    //                     'visible' => 'true', 
                    //                     'type' => 'item',
                    //                     'item' => 'categorylist_item',
                    //                     'url' => null,
                    //                     'name' => 'HW Partner',
                    //                     'title' => 'HW Partner',
                    //                     //'icon' => 'fa-angle-double-down',
                    //                 ], 
                    //                 'item_hw_group' => [
                    //                     'enabled' => 'true',
                    //                     'visible' => 'true', 
                    //                     'type' => 'item',
                    //                     'item' => 'categorylist_item',
                    //                     'url' => null,
                    //                     'name' => 'Group',
                    //                     'title' => 'Group',
                    //                     //'icon' => 'fa-angle-double-down',
                    //                 ], 
                    //             ),
                    //         ],
                    //         // ----------------------------------------------------------
                            
                    //         // ----------------------------------------------------------                                                     
                    //         // ----------------------------------------------------------
                    //         // ----------------------------------------------------------
                    //         // ----------------------------------------------------------
                    //     ),
                    // ], 
                    'community' => [
                        'enabled' => 'true',
                        'visible' => 'true', 
                        'type' => 'menu',
                        'item' => 'categorylist',
                        'url' => null,
                        'name' => 'community',
                        'title' => '公用',
                        //'icon' => 'fa-angle-double-down',
                        'menu' => array(  
                            'categorylist1' => [
                                'menu' => array(  
                                    // ----------------------------------------------------------
                                    'categorylist1' => [
                                        'enabled' => 'true',
                                        'visible' => 'true', 
                                        'type' => 'item',
                                        'item' => 'categorylist',
                                        'url' => null,
                                        'name' => 'Blogger',
                                        'title' => 'Blogger',
                                        //'icon' => 'fa-angle-double-down',
                                    ], 
                                    // ----------------------------------------------------------
                                    'item_hahaha' => [
                                        'enabled' => 'true',
                                        'visible' => 'true', 
                                        'type' => 'item',
                                        'item' => 'categorylist_item',
                                        'url' => 'http://hahaha0417.blogspot.com/2014/11/blog-post.html',
                                        'name' => 'hahaha',
                                        'title' => 'hahaha',
                                        //'icon' => 'fa-angle-double-down',
                                    ], 
                                    'item_hahaha_creative' => [
                                        'enabled' => 'true',
                                        'visible' => 'true', 
                                        'type' => 'item',
                                        'item' => 'categorylist_item',
                                        'url' => 'http://hahaha-music.blogspot.com/2015/03/httpsdrive.html',
                                        'name' => 'hahaha創作區',
                                        'title' => 'hahaha創作區',
                                        //'icon' => 'fa-angle-double-down',
                                    ], 
                                    'item_hahaha_c_plus_plus_teach' => [
                                        'enabled' => 'true',
                                        'visible' => 'true', 
                                        'type' => 'item',
                                        'item' => 'categorylist_item',
                                        'url' => 'http://hahaha-cplusplus.blogspot.com/2016/08/hahaha-c.html',
                                        'name' => 'hahaha C++ 教學區',
                                        'title' => 'hahaha C++ 教學區',
                                        //'icon' => 'fa-angle-double-down',
                                    ], 
                                    'item_hahaha_c_plus_plus_teach(outline)' => [
                                        'enabled' => 'true',
                                        'visible' => 'true', 
                                        'type' => 'item',
                                        'item' => 'categorylist_item',
                                        'url' => 'https://hahaha-cplus-temp.blogspot.com/2018/08/blog-post.html',
                                        'name' => 'hahaha C++ 教學區(草稿)',
                                        'title' => 'hahaha C++ 教學區(草稿)',
                                        //'icon' => 'fa-angle-double-down',
                                    ], 
                                ),
                            ],
                            // 'categorylist2' => [
                            //     'menu' => array(  
                            //         // ----------------------------------------------------------
                            //         'categorylist2' => [
                            //             'enabled' => 'true',
                            //             'visible' => 'true', 
                            //             'type' => 'item',
                            //             'item' => 'categorylist',
                            //             'url' => null,
                            //             'name' => 'Information',
                            //             'title' => 'Information',
                            //             //'icon' => 'fa-angle-double-down',
                            //         ], 
                            //         // ----------------------------------------------------------
                            //         'item_future' => [
                            //             'enabled' => 'true',
                            //             'visible' => 'true', 
                            //             'type' => 'item',
                            //             'item' => 'categorylist_item',
                            //             'url' => null,
                            //             'name' => 'Future',
                            //             'title' => 'Future',
                            //             //'icon' => 'fa-angle-double-down',
                            //         ], 
                            //         'item_company' => [
                            //             'enabled' => 'true',
                            //             'visible' => 'true', 
                            //             'type' => 'item',
                            //             'item' => 'categorylist_item',
                            //             'url' => null,
                            //             'name' => 'Company',
                            //             'title' => 'Company',
                            //             //'icon' => 'fa-angle-double-down',
                            //         ], 
                            //         'item_bug_and_fix' => [
                            //             'enabled' => 'true',
                            //             'visible' => 'true', 
                            //             'type' => 'item',
                            //             'item' => 'categorylist_item',
                            //             'url' => null,
                            //             'name' => 'Bug & Fix',
                            //             'title' => 'Bug & Fix',
                            //             //'icon' => 'fa-angle-double-down',
                            //         ], 
                            //         'item_service' => [
                            //             'enabled' => 'true',
                            //             'visible' => 'true', 
                            //             'type' => 'item',
                            //             'item' => 'categorylist_item',
                            //             'url' => null,
                            //             'name' => 'Service',
                            //             'title' => 'Service',
                            //             //'icon' => 'fa-angle-double-down',
                            //         ], 
                            //         'item_activity' => [
                            //             'enabled' => 'true',
                            //             'visible' => 'true', 
                            //             'type' => 'item',
                            //             'item' => 'categorylist_item',
                            //             'url' => null,
                            //             'name' => 'Activity',
                            //             'title' => 'Activity',
                            //             //'icon' => 'fa-angle-double-down',
                            //         ], 
                            //     )
                            // ],
                            'categorylist3' => [
                                'menu' => array(  
                                    // ----------------------------------------------------------
                                    'categorylist3' => [
                                        'enabled' => 'true',
                                        'visible' => 'true', 
                                        'type' => 'item',
                                        'item' => 'categorylist',
                                        'url' => null,
                                        'name' => 'LinkedIn X Youtube X Google+',
                                        'title' => 'LinkedIn X Youtube X Google+',
                                        //'icon' => 'fa-angle-double-down',
                                    ], 
                                    // ---------------------------------------------------------- 
                                    'item_linkedin' => [
                                        'enabled' => 'true',
                                        'visible' => 'true', 
                                        'type' => 'item',
                                        'item' => 'categorylist_item',
                                        'url' => 'https://www.linkedin.com/in/%E5%82%91%E7%90%AA-%E9%99%B3-2282779b/',
                                        'name' => 'LinkedIn',
                                        'title' => 'LinkedIn',
                                        //'icon' => 'fa-angle-double-down',
                                    ],                            
                                    'item_youtube' => [
                                        'enabled' => 'true',
                                        'visible' => 'true', 
                                        'type' => 'item',
                                        'item' => 'categorylist_item',
                                        'url' => 'https://www.youtube.com/channel/UCHUz-pg_YSXhCj1enipg3EA/playlists',
                                        'name' => 'Youtube',
                                        'title' => 'Youtube',
                                        //'icon' => 'fa-angle-double-down',
                                    ],     
                                    'item_google_plus' => [
                                        'enabled' => 'true',
                                        'visible' => 'true', 
                                        'type' => 'item',
                                        'item' => 'categorylist_item',
                                        'url' => 'https://plus.google.com/101969760505868523022',
                                        'name' => 'Google+',
                                        'title' => 'Google+',
                                        //'icon' => 'fa-angle-double-down',
                                    ], 
                                ),
                            ],
                            // ----------------------------------------------------------
                            
                                                      
                            // ----------------------------------------------------------
                            // ----------------------------------------------------------
                            // ----------------------------------------------------------
                        ),
                    ], 
                    // 'support' => [
                    //     'enabled' => 'true',
                    //     'visible' => 'true', 
                    //     'type' => 'menu',
                    //     'item' => 'categorylist',
                    //     'url' => null,
                    //     'name' => 'support',
                    //     'title' => '支援',
                    //     //'icon' => 'fa-angle-double-down',
                    //     'menu' => array(  
                    //         'categorylist1' => [
                    //             'menu' => array(  
                    //                 // ----------------------------------------------------------
                    //                 'categorylist1' => [
                    //                     'enabled' => 'true',
                    //                     'visible' => 'true', 
                    //                     'type' => 'item',
                    //                     'item' => 'categorylist',
                    //                     'url' => null,
                    //                     'name' => 'Document X Driver X Teach',
                    //                     'title' => 'Document X Driver X Teach',
                    //                     //'icon' => 'fa-angle-double-down',
                    //                 ], 
                    //                 // ----------------------------------------------------------
                    //                 'item_document' => [
                    //                     'enabled' => 'true',
                    //                     'visible' => 'true', 
                    //                     'type' => 'item',
                    //                     'item' => 'categorylist_item',
                    //                     'url' => '/device/aoi/full/model/vs100',
                    //                     'name' => 'Document',
                    //                     'title' => 'Document',
                    //                     //'icon' => 'fa-angle-double-down',
                    //                 ], 
                    //                 'item_driver' => [
                    //                     'enabled' => 'true',
                    //                     'visible' => 'true', 
                    //                     'type' => 'item',
                    //                     'item' => 'categorylist_item',
                    //                     'url' => '/device/aoi/full/model/ha100',
                    //                     'name' => 'Driver',
                    //                     'title' => 'Driver',
                    //                     //'icon' => 'fa-angle-double-down',
                    //                 ], 
                    //                 'item_teach' => [
                    //                     'enabled' => 'true',
                    //                     'visible' => 'true', 
                    //                     'type' => 'item',
                    //                     'item' => 'categorylist_item',
                    //                     'url' => '/device/aoi/full',
                    //                     'name' => 'Teach',
                    //                     'title' => 'Teach',
                    //                     //'icon' => 'fa-angle-double-down',
                    //                 ],  
                    //             ),
                    //         ],
                    //         'categorylist2' => [
                    //             'menu' => array( 
                    //                 // ----------------------------------------------------------
                    //                 'categorylist2' => [
                    //                     'enabled' => 'true',
                    //                     'visible' => 'true', 
                    //                     'type' => 'item',
                    //                     'item' => 'categorylist',
                    //                     'url' => null,
                    //                     'name' => 'Forum',
                    //                     'title' => 'Forum',
                    //                     //'icon' => 'fa-angle-double-down',
                    //                 ], 
                    //                 // ----------------------------------------------------------
                    //                 'item_hahaha_Forum1' => [
                    //                     'enabled' => 'true',
                    //                     'visible' => 'true', 
                    //                     'type' => 'item',
                    //                     'item' => 'categorylist_item',
                    //                     'url' => null,
                    //                     'name' => 'hahaha Forum',
                    //                     'title' => 'hahaha Forum',
                    //                     //'icon' => 'fa-angle-double-down',
                    //                 ], 
                    //                 'item_hahaha_Forum2' => [
                    //                     'enabled' => 'true',
                    //                     'visible' => 'true', 
                    //                     'type' => 'item',
                    //                     'item' => 'categorylist_item',
                    //                     'url' => null,
                    //                     'name' => 'hehehe Forum',
                    //                     'title' => 'hehehe Forum',
                    //                     //'icon' => 'fa-angle-double-down',
                    //                 ], 
                    //                 'item_hahaha_Forum3' => [
                    //                     'enabled' => 'true',
                    //                     'visible' => 'true', 
                    //                     'type' => 'item',
                    //                     'item' => 'categorylist_item',
                    //                     'url' => null,
                    //                     'name' => 'hohoho Forum',
                    //                     'title' => 'hohoho Forum',
                    //                     //'icon' => 'fa-angle-double-down',
                    //                 ],  
                    //             ),
                    //         ],
                                                       
                    //         // ----------------------------------------------------------
                                                     
                    //         // ----------------------------------------------------------
                    //         // ----------------------------------------------------------
                    //         // ----------------------------------------------------------
                    //     ),
                    // ], 
                    // 'buy' => [
                    //     'enabled' => 'true',
                    //     'visible' => 'true', 
                    //     'type' => 'item',
                    //     'item' => 'item',
                    //     'url' => null,
                    //     'name' => 'buy',
                    //     'title' => '購買',
                    //     //'icon' => 'fa-angle-double-down',
                        
                    // ], 
                    // ----------------------------------------------------------
                    'seperater1' => [
                        'enabled' => 'true',
                        'visible' => 'true', 
                        'type' => 'item',
                        'item' => 'seperater',
                        'url' => null,
                        'name' => 'seperater1',
                        'title' => '分隔線1',
                        //'icon' => 'fa-angle-double-down',
                    ], 
                    // ----------------------------------------------------------
                    'api' => [
                        'enabled' => 'true',
                        'visible' => 'true', 
                        'type' => 'item',
                        'item' => 'item',
                        'url' => '/api',
                        'name' => 'API',
                        'title' => 'API',
                        //'icon' => 'fa-angle-double-down',
                    ], 
                    // ----------------------------------------------------------
                    'seperater2' => [
                        'enabled' => 'true',
                        'visible' => 'true', 
                        'type' => 'item',
                        'item' => 'seperater',
                        'url' => null,
                        'name' => 'seperater2',
                        'title' => '分隔線2',
                        //'icon' => 'fa-angle-double-down',
                    ],                     
                    // ----------------------------------------------------------
                    'collection' => [
                        'enabled' => $enabled,
                        'visible' => $visible, 
                        'type' => 'collection_list',
                        'item' => 'item',
                        'url' => null,
                        'name' => 'collection',
                        'title' => '作品集',
                        //'icon' => 'fa-angle-double-down',
                        'menu' => array(  
                            // ----------------------------------------------------------
                            'winform_design' => [
                                'enabled' => 'true',
                                'visible' => 'true', 
                                'type' => 'item',
                                'item' => 'item',
                                'url' => '/device/aoi/full/model/vs100',
                                'name' => 'winform design',
                                'title' => '視窗程式設計',
                                //'icon' => 'fa-angle-double-down',
                            ], 
                            // ----------------------------------------------------------
                            'web_design' => [
                                'enabled' => 'true',
                                'visible' => 'true', 
                                'type' => 'item',
                                'item' => 'category',
                                // 'url' => '#',
                                'name' => 'web design',
                                'title' => '網頁設計',
                                //'icon' => 'fa-angle-double-down',
                            ],                             
                        ),
                    ],                                      
                    'free_tool' => [
                        'enabled' => $enabled,
                        'visible' => $visible, 
                        'type' => 'item',
                        'item' => 'item',
                        'url' => null,
                        'name' => 'free_tool',
                        'title' => '免費工具',
                        //'icon' => 'fa-angle-double-down',
                    ], 
                    'video' => [
                        'enabled' => $enabled,
                        'visible' => $visible, 
                        'type' => 'item',
                        'item' => 'item',
                        'url' => null,
                        'name' => 'video',
                        'title' => '影片',
                        //'icon' => 'fa-angle-double-down',
                    ], 
                    'contact' => [
                        'enabled' => 'true',
                        'visible' => 'true', 
                        'type' => 'item',
                        'item' => 'item',
                        'url' => '/contact',
                        'name' => 'contact',
                        'title' => '聯絡我們',
                        //'icon' => 'fa-angle-double-down',
                    ], 
                    // ----------------------------------------------------------
                    'seperater3' => [
                        'enabled' => 'true',
                        'visible' => 'true', 
                        'type' => 'item',
                        'item' => 'seperater',
                        'url' => null,
                        'name' => 'seperater3',
                        'title' => '分隔線3',
                        //'icon' => 'fa-angle-double-down',
                    ], 
                    // ----------------------------------------------------------
                    'setting' => [
                        'enabled' => 'true',
                        'visible' => 'true', 
                        'type' => 'item',
                        'item' => 'item',
                        'url' => null,
                        'name' => 'setting',
                        'title' => '控制設定',
                        //'icon' => 'fa-angle-double-down',
                    ], 
                    // ----------------------------------------------------------
                    'seperater4' => [
                        'enabled' => 'true',
                        'visible' => 'true', 
                        'type' => 'item',
                        'item' => 'seperater',
                        'url' => null,
                        'name' => 'seperater4',
                        'title' => '分隔線4',
                        //'icon' => 'fa-angle-double-down',
                    ], 
                    // ----------------------------------------------------------
                    'ha_media_100' => [
                        'enabled' => 'true',
                        'visible' => 'true', 
                        'type' => 'item',
                        'item' => 'item',
                        'url' => '/ha/ha_media_100',
                        'name' => 'ha_media_100',
                        'title' => 'ha_media_100',
                        //'icon' => 'fa-angle-double-down',
                    ], 
                ),
                
                // 前端首頁
            ),
            // ----------------------------------------------------------
            'item_search' => [  
                'enabled' => $enabled,
                'visible' => $visible,   
                'type' => 'item',
                'item' => 'item',
                'name' => 'search',
                'title' => '搜尋',
                'url' => '#',
                'icon' => "fa-angle-double-down",
                // 'target' => '_self',
                // 'background' => 'rgba(190,155,90,0.5)',
                // 'active' => 'true',
                
                
                // 前端首頁
            ],
            // ----------------------------------------------------------
            'item_login' => [
                'enabled' => 'true',
                'visible' => 'true',   
                'type' => 'item',
                'item' => 'item',
                'url' => '/login',
                'name' => 'login',
                'title' => '登入',
                //'icon' => 'fa-angle-double-down',
            ], 
            'item_member' => [
                'enabled' => 'true',
                'visible' => 'true',   
                'type' => 'item',
                'item' => 'item',
                'name' => 'member',
                'url' => null,
                'title' => 'XXX，您好',
                //'icon' => 'fa-angle-double-down',
            ], 
            'item_logout' => [
                'enabled' => 'true',
                'visible' => 'true',   
                'type' => 'item',
                'item' => 'item',
                'url' => '/logout',
                'name' => 'logout',
                'title' => '登出',
                //'icon' => 'fa-angle-double-down',
            ], 
            'item_member_setting' => [
                'enabled' => $enabled,
                'visible' => $visible,   
                'type' => 'item',
                'item' => 'item',
                'name' => 'member_setting',
                // 'url' => 'backend/index/initial',
                'title' => '個人設定',
                //'icon' => 'fa-angle-double-down',
            ], 
            'item_select_language' => [
                'enabled' => $enabled,
                'visible' => $visible,   
                'type' => 'language_menu',
                'item' => 'item_select_language',
                'name' => 'select_language',
                // 'url' => 'backend/index/initial',
                'title' => '選擇語言',
                //'icon' => 'fa-angle-double-down',
                'menu' => array(  
                    '' => [
                        'enabled' => 'true',
                        'visible' => 'true', 
                        'type' => 'item',
                        // 'url' => '#',
                        'name' => 'traditional',
                        'title' => '繁體中文',
                        //'icon' => 'fa-angle-double-down',
                    ], 
                    'simplified' => [
                        'enabled' => 'true',
                        'visible' => 'true', 
                        'type' => 'item',
                        // 'url' => '#',
                        'name' => 'simplified',
                        'title' => '簡體中文',
                        //'icon' => 'fa-angle-double-down',
                    ], 
                    'english' => [
                        'enabled' => 'true',
                        'visible' => 'true', 
                        'type' => 'item',
                        // 'url' => '#',
                        'name' => 'english',
                        'title' => '英文',
                        //'icon' => 'fa-angle-double-down',
                    ], 
                ),
            ], 
        );
    }

    public function get_tail(&$tail)
    {
        $tail = array(  
            'AOI' => array(                 
                'url' => 'https://www.cakeresume.com/hahaha0417',
                'title' => '關於hahaha - C#自動化工程師',
                'content' => '關於hahaha - C#自動化工程師',
            ),
            'PHP' => array(                 
                'url' => 'https://www.cakeresume.com/chen-jie-qi',
                'title' => '關於hahaha - PHP(Laravel)工程師',
                'content' => '關於hahaha - PHP(Laravel)工程師',
            ),

            // <li class="reset">
            //     <a href="#" title="關於hahaha" data-tooltip="hide">關於hahaha
            //     </a>
            // </li>
            // <li class="reset">
            //     <a href="#" title="hahaha服務" data-tooltip="hide">hahaha服務
            //     </a>
            // </li>                        
            // <li class="reset">
            //     <a href="#" title="hahaha新鮮事" data-tooltip="hide">hahaha新鮮事
            //     </a>
            // </li>
            // <li class="reset">
            //     <a href="#" title="hahaha影音" data-tooltip="hide">hahaha影音
            //     </a>
            // </li>
            // <li class="reset">
            //     <a href="#" title="聯絡hahaha" data-tooltip="hide">聯絡hahaha
            //     </a>
            // </li>
            // <li class="reset">
            //     <a href="#" title="網站地圖" data-tooltip="hide">網站地圖
            //     </a>
            // </li>  
            
        );
    }

    public function Index()
    {              
        $nav_list_ = [];
        $this->get_nav_list($nav_list_);
        $tail_ = [];
        $this->get_tail($tail_);

        $view_ = \hahahalib\hahaha_view::Instance();
        
        // db
        $app_ = \hahaha\hahaha_application::Instance();
        $doctrine_ = \hahahalib\hahaha_orm_doctrine::Instance();
        // 這可相對路徑，但是注意檔案在哪裡
        $em_ = $doctrine_->Initial_Config('hahaha_front_index', $app_->Root_ . '/app/http/models/front/index');
        // https://www.doctrine-project.org/projects/doctrine-orm/en/2.6/reference/query-builder.html
        $query_nav_ = $em_->createQueryBuilder();
        $nav_ = $query_nav_->select('i')
            ->from('\front\index\A_Index', 'i')
            ->where('i.page = :page AND i.item = :item')
            ->setParameters([
                'page' => 'index', 
                'item' => 'nav'
                ]
            )
            ->orderBy('i.order', 'ASC')
            ->getQuery()
            ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
      
        $query_pic_board_ = $em_->createQueryBuilder();
        $pic_board_ = $query_pic_board_->select('i')
            ->from('\front\index\A_Index', 'i')
            ->where('i.page = :page AND i.item = :item')
            ->setParameters([
                'page' => 'index', 
                'item' => 'pic_board'
                ]
            )
            ->orderBy('i.order', 'ASC')
            ->getQuery()
            ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
           
         
            
        // 填入參數
        $menu_ = \ha\Menu::Get();
        $menu_->nav_list = &$nav_list_;
        $menu_->tail = &$tail_;
        $menu_->nav = &$nav_;
        $menu_->pic_board = &$pic_board_;

        // 渲染
        $view_->View([
            [\hahaha\view\web\front\index_view::Instance(), "Index"],
        ]);
    }

    public function Overview()
    {  
        $view_ = \hahahalib\hahaha_view::Instance();
        
        // db
        $app_ = \hahaha\hahaha_application::Instance();
        $doctrine_ = \hahahalib\hahaha_orm_doctrine::Instance();
        // 這可相對路徑，但是注意檔案在哪裡
        $em_ = $doctrine_->Initial_Config('hahaha_front_index', $app_->Root_ . '/app/http/models/front/index');
        // https://www.doctrine-project.org/projects/doctrine-orm/en/2.6/reference/query-builder.html
        $query_item_white_ = $em_->createQueryBuilder();
        $item_white_ = $query_item_white_->select('i')
            ->from('\front\index\A_Index', 'i')
            ->where('i.page = :page AND i.item = :item')
            ->setParameters([
                'page' => 'Overview', 
                'item' => 'item_white'
                ]
            )
            ->orderBy('i.order', 'ASC')
            ->getQuery()
            ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
      
        $query_item_black_ = $em_->createQueryBuilder();
        $item_black_ = $query_item_black_->select('i')
            ->from('\front\index\A_Index', 'i')
            ->where('i.page = :page AND i.item = :item')
            ->setParameters([
                'page' => 'Overview', 
                'item' => 'item_black'
                ]
            )
            ->orderBy('i.order', 'ASC')
            ->getQuery()
            ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);

        $query_item_secondary_ = $em_->createQueryBuilder();
        $item_secondary_ = $query_item_secondary_->select('i')
            ->from('\front\index\A_Index', 'i')
            ->where('i.page = :page AND i.item = :item')
            ->setParameters([
                'page' => 'Overview', 
                'item' => 'item_secondary'
                ]
            )
            ->orderBy('i.order', 'ASC')
            ->getQuery()
            ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
            
        $query_item_info_ = $em_->createQueryBuilder();
        $item_info_ = $query_item_info_->select('i')
            ->from('\front\index\A_Index', 'i')
            ->where('i.page = :page AND i.item = :item')
            ->setParameters([
                'page' => 'Overview', 
                'item' => 'item_info'
                ]
            )
            ->orderBy('i.order', 'ASC')
            ->getQuery()
            ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);

        $query_item_pic_ = $em_->createQueryBuilder();
        $item_pic_ = $query_item_pic_->select('i')
            ->from('\front\index\A_Index', 'i')
            ->where('i.page = :page AND i.item = :item')
            ->setParameters([
                'page' => 'Overview', 
                'item' => 'item_pic'
                ]
            )
            ->orderBy('i.order', 'ASC')
            ->getQuery()
            ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
            
         
        // 這可以只撈一次，但其實目前沒啥東西，不會太慢，先隨便撈
        // 填入參數
        $menu_ = \ha\Menu::Get();
        $menu_->item_white = &$item_white_;
        $menu_->item_black = &$item_black_;
        $menu_->item_secondary = &$item_secondary_;
        $menu_->item_info = &$item_info_;
        $menu_->item_pic = &$item_pic_;

        // 渲染
        $view_->View([
            [\hahaha\view\web\front\main_home_overview_view::Instance(), "Index"],
        ]);
     
    }

    public function Feature()
    {  
        $view_ = \hahahalib\hahaha_view::Instance();
        
        // db
        $app_ = \hahaha\hahaha_application::Instance();
        $doctrine_ = \hahahalib\hahaha_orm_doctrine::Instance();
        // 這可相對路徑，但是注意檔案在哪裡
        $em_ = $doctrine_->Initial_Config('hahaha_front_index', $app_->Root_ . '/app/http/models/front/index');
        // https://www.doctrine-project.org/projects/doctrine-orm/en/2.6/reference/query-builder.html
        $query_item_vertical_accordion_ = $em_->createQueryBuilder();
        
        $item_vertical_accordion_ = $query_item_vertical_accordion_->select('i')
            ->from('\front\index\A_Index', 'i')
            ->where('i.page = :page AND i.item = :item')
            ->setParameters([
                'page' => 'Feature', 
                'item' => 'item_vertical_accordion'
                ]
            )
            ->orderBy('i.order', 'ASC')
            ->getQuery()
            ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
           
            
        $query_item_vertical_accordion_id_ = $em_->createQueryBuilder();
        $item_vertical_accordion_id_ = $query_item_vertical_accordion_id_->select('i.id')
            ->from('\front\index\A_Index', 'i')
            ->where('i.page = :page AND i.item = :item')
            ->setParameters([
                'page' => 'Feature', 
                'item' => 'item_vertical_accordion'
                ]
            )
            ->orderBy('i.order', 'ASC')
            ->getQuery()
            ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
            
        $query_item_item_vertical_accordion_ = $em_->createQueryBuilder();
        $item_item_vertical_accordion_ = $query_item_item_vertical_accordion_->select('i')
            ->from('\front\index\A_Item', 'i')
            ->where('i.id IN(:id)')
            ->setParameters([
                'id' => $item_vertical_accordion_id_
                ]
            )
            ->orderBy('i.order', 'ASC')
            ->getQuery()
            ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
            
     
        $query_item_accordion_ = $em_->createQueryBuilder();
        $item_accordion_ = $query_item_accordion_->select('i')
            ->from('\front\index\A_Index', 'i')
            ->where('i.page = :page AND i.item = :item')
            ->setParameters([
                'page' => 'Feature', 
                'item' => 'item_accordion'
                ]
            )
            ->orderBy('i.order', 'ASC')
            ->getQuery()
            ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);


        $query_item_accordion_id_ = $em_->createQueryBuilder();
        $item_accordion_id_ = $query_item_accordion_id_->select('i.id')
            ->from('\front\index\A_Index', 'i')
            ->where('i.page = :page AND i.item = :item')
            ->setParameters([
                'page' => 'Feature', 
                'item' => 'item_accordion'
                ]
            )
            ->orderBy('i.order', 'ASC')
            ->getQuery()
            ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
    
        $query_item_item_accordion_ = $em_->createQueryBuilder();
        $item_item_accordion_ = $query_item_item_accordion_->select('i')
            ->from('\front\index\A_Item', 'i')
            ->where('i.id IN(:id)')
            ->setParameters([
                'id' => $item_accordion_id_
                ]
            )
            ->orderBy('i.order', 'ASC')
            ->getQuery()
            ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
              
        // 這可以只撈一次，但其實目前沒啥東西，不會太慢，先隨便撈
        // 填入參數
        $menu_ = \ha\Menu::Get();
        $menu_->item_vertical_accordion = &$item_vertical_accordion_;
        $menu_->item_item_vertical_accordion = &$item_item_vertical_accordion_;
        $menu_->item_accordion = &$item_accordion_;
        $menu_->item_item_accordion = &$item_item_accordion_;

        // 渲染
        $view_->View([
            [\hahaha\view\web\front\main_home_feature_view::Instance(), "Index"],
        ]);
     
    
    }

    public function Layout()
    {
        $nav_list_ = [];
        $this->get_nav_list($nav_list_);
        $tail_ = [];
        $this->get_tail($tail_);

        $view_ = \hahahalib\hahaha_view::Instance();
        
        // db
        $app_ = \hahaha\hahaha_application::Instance();
        $doctrine_ = \hahahalib\hahaha_orm_doctrine::Instance();
        // 這可相對路徑，但是注意檔案在哪裡
        $em_ = $doctrine_->Initial_Config('hahaha_front_index', $app_->Root_ . '/app/http/models/front/index');
        // https://www.doctrine-project.org/projects/doctrine-orm/en/2.6/reference/query-builder.html
        $query_nav_ = $em_->createQueryBuilder();
        $nav_ = $query_nav_->select('i')
            ->from('\front\index\A_Index', 'i')
            ->where('i.page = :page AND i.item = :item')
            ->setParameters([
                'page' => 'index', 
                'item' => 'nav'
                ]
            )
            ->orderBy('i.order', 'ASC')
            ->getQuery()
            ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
      
        $query_pic_board_ = $em_->createQueryBuilder();
        $pic_board_ = $query_pic_board_->select('i')
            ->from('\front\index\A_Index', 'i')
            ->where('i.page = :page AND i.item = :item')
            ->setParameters([
                'page' => 'index', 
                'item' => 'pic_board'
                ]
            )
            ->orderBy('i.order', 'ASC')
            ->getQuery()
            ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
           
         
            
        // 填入參數
        $menu_ = \ha\Menu::Get();
        $menu_->nav_list = &$nav_list_;
        $menu_->tail = &$tail_;
        $menu_->nav = &$nav_;
        $menu_->pic_board = &$pic_board_;

        // 渲染
        $view_->View([
            [\hahaha\view\web\front\index_view::Instance(), "Index"],
        ]);
    }
    
    public function Index_layout()
    {        
        // --------------------------------------------------------------------------
        /*
         -- Layout示意圖 -- 
        將需要的View傳進去即可，在View裡面撰寫規則處理，
        無聊的話，可以把我的\ha\Menu弄一個\ha\Layout傳，這很彈性，
        不限定作法，例如也可以將$this->Layout();換成\hahaha\view\web\front\index_layout::Instance()->Layout();
        專案負責人決定(其實這是噱頭，不重要)
        */
        // 填入參數
        $menu_ = \ha\Menu::Get();
        $menu_->content = [\hahaha\view\web\front\index_view::Instance(), "Index"];
        // 
        $this->Layout();
        // --------------------------------------------------------------------------
    }

    public function Login()
    {
        \ha\Session::Start();
        \ha\Session::Get()->user = 'hahaha';
        
        echo 'hahaha登入';
    }

    public function Logout()
    {
        \ha\Session::Start();
        \ha\Session::Get()->user = NULL;
        echo 'hahaha登出';
    }

    public function Index_Test()
    {   
		echo "OGC";
		return;
		
        $app_ = \hahaha\hahaha_application::Instance();
        $doctrine_ = \hahahalib\hahaha_orm_doctrine::Instance();
        $em_ = $doctrine_->Initial_Config('hahaha_front_index', $app_->Root_ . '/app/http/models/front/index');

        // $query_pic_board_ = $em_->createQueryBuilder();
        // $pic_board_ = $query_pic_board_->select('i')
        //     ->from('\front\index2\A_Index', 'i')
        //     ->where('i.page = :page AND i.item = :item')
        //     ->setParameters([
        //         'page' => 'index', 
        //         'item' => 'pic_board'
        //         ]
        //     )
        //     ->orderBy('i.order', 'ASC')
        //     ->getQuery()
        //     ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);


        //    var_dump($pic_board_);

        // getResult有誤，似乎沒有相同key
        $rsm_ = new \Doctrine\ORM\Query\ResultSetMappingBuilder(
            $em_, 
            \Doctrine\ORM\Query\ResultSetMappingBuilder::COLUMN_RENAMING_INCREMENT
        );
        $rsm_->addRootEntityFromClassMetadata(\front\index2\A_Index::class, 'idx');
        // 沒有設定@OneToMany要補這個
        $rsm_->addJoinedEntityFromClassMetadata('\front\index2\A_Item', 'it', 'idx', 'item1');
        $q_ = "SELECT ".$rsm_->generateSelectClause()." FROM index_ idx JOIN item it ";
        $query = $em_->createNativeQuery($q_, $rsm_);
        $result = $query->getResult();

        // $rsm_->addEntityResult('\front\index2\A_Index', 'idx');
        // $rsm_->addFieldResult('idx', 'no', 'no'); // ($alias, $columnName, $fieldName)
        // $rsm_->addEntityResult('\front\index2\A_Item', 'it');

        var_dump($result[0]['item1'][0]);
        
        // echo '進入controller' . "</br>"; 
        // echo "<div style='color:red;'>xxx</div>";

        // $view = \hahahalib\hahaha_view::Instance();
        // $menu_ = \ha\Menu::Get();
        // $menu_->aaa = 'aaa';
        // $view->View([
        //     [\hahaha\view\index_view::Instance(), "Index"],
        //     [\hahaha\view\index_view::Instance(), "Index2"],
        //     [\hahaha\view\index_view::Instance(), "Index3"],
        //     [\hahaha\view\index_view::Instance(), "Index4"],
        // ]);
        
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
        /*
        $app_ = \hahaha\hahaha_application::Instance();
        $doctrine_ = \hahahalib\hahaha_orm_doctrine::Instance();
        // 這可相對路徑，但是注意檔案在哪裡
        $em_ = $doctrine_->Initial_Config('test_oring', $app_->Root_ . '/app/models/A');
        */
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

        // 初始化
        /*
        \ha\Asset::Class('normal')->Initial();
        $asset_ = \ha\Asset::Asset('default')->Initial(); 
        $asseter_ = \ha\Asset::Asseter();

        // 初始asset階段
        $asset_->Asset($asseter_, 'main');
        $asset_->Asset($asseter_, 'sub');
        // 加入
        $asset_->Asset($asseter_, 'main', 'water_wheel_carousel', ['plugin', 'carousel'], \hahaha\asset\hahaha_asset_base::FRONT);
        $asset_->Asset($asseter_, 'main', 'water_wheel_carousel', ['plugin', 'carousel'], \hahaha\asset\hahaha_asset_base::FRONT);
        $asset_->Asset($asseter_, 'sub', 'app');

        echo "<pre>";
        var_dump( \ha\Asset::Render() );
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
