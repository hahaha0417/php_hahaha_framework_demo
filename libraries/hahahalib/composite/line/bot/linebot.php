<?php

/**
 * Copyright 2016 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

 /**
  * 照開源加入apache 2.0規範
  * 
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

class linebot
{
    use \hahahalib\hahaha_instance_trait;

    /** \LINE\LINEBot
     * 
     */
    public $Linebot_ = NULL;

    function __construct($channel_access_token = NULL, 
        $channel_secret = NULL
    )
    {
        if(!$channel_access_token && !$channel_secret)
        {
            $this->Linebot_ = new \LINE\LINEBot( 
                new \LINE\LINEBot\HTTPClient\CurlHTTPClient($channel_access_token), 
                ['channelSecret' => $channel_secret]
            );  
        }        
    }

    /*
    沒呼叫就不會載入，因此不會出錯
    */
    public function Initial()
    {
        $option_ = \hahaha\hahaha_option::Instance();
        $this->Linebot_ = new \LINE\LINEBot( 
            new \LINE\LINEBot\HTTPClient\CurlHTTPClient($option_->Line->Channel_Access_Token), 
            ['channelSecret' => $option_->Line->Channel_Secret]
        );   
        return $this;
    }

}