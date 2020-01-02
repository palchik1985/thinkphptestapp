<?php

namespace Home\Controller;

use Extend\Page;
use Think\Controller;

class AppsController extends Controller
{
    
    
    public function index()
    {
        
        $model = D('MobileAppView');
        
        $count = $model->count();
        $Page  = new Page($count, 20);
        $show  = $Page->show();
        
        $where = ['active' => 1];
        if(!empty(I('get.platform_id'))){
            $where['platform_id'] = I('get.platform_id');
        }
        
        $items = $model->where($where)->limit($Page->firstRow . ',' . $Page->listRows)->order('id ASC')->select();
        
        $this->assign('page', $show);
        $this->assign('items', $items);
        $this->display();
    }
}