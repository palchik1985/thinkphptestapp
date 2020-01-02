<?php

namespace Home\Model;

use Think\Model\ViewModel;

class MobileAppViewModel extends ViewModel
{
    
    public $viewFields = [
        'apps' => ['id', 'title', 'prompt', 'link', 'image_link', 'active', '_type' => 'LEFT'],
        
        'platforms' => ['name' => 'platform_name', '_on' => 'platforms.id=apps.platform_id'],
    ];
}