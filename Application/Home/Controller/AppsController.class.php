<?php

namespace Home\Controller;

use Common\Controller\BaseController;
use Extend\Page;
use Home\Model\MobileAppModel;
use Home\Model\MobileAppViewModel;

class AppsController extends BaseController
{
    
    public function __construct()
    {
        $this->model = new MobileAppModel();
        $this->viewModel = new MobileAppViewModel();
        
        parent::__construct();
    }
    
    public function index()
    {

        $count = $this->viewModel->count();
        $Page  = new Page($count, 2);
        $show  = $Page->show();

        $where = ['active' => 1];
        if ( ! empty(I('get.platform_id'))) {
            $where[ 'platform_id' ] = I('get.platform_id');
        }

        $items = $this->viewModel->where($where)->limit($Page->firstRow . ',' . $Page->listRows)->order('id ASC')->select();

        $this->assign('page', $show);
        $this->assign('items', $items);
        $this->display();
    }
    
    
}