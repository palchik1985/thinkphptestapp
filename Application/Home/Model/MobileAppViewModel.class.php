<?php

namespace Home\Model;

use Think\Model\ViewModel;

class MobileAppViewModel extends ViewModel
{
    
    public $viewFields = array (
        'apps' => array ('id', 'title', 'prompt', 'link', 'active', '_type' => 'LEFT'),
        
        'platforms' => array ('name' => 'platform_name', '_on' => 'platforms.id=apps.platform_id'),
    );
}