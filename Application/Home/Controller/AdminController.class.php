<?php

namespace Home\Controller;

use Common\Controller\BaseController;
use Extend\Page;
use Home\Model\MobileAppModel;
use Home\Model\MobileAppViewModel;

class AdminController extends BaseController
{
    
    public function __construct()
    {
        
        parent::__construct();
        
        $this->model     = new MobileAppModel();
        $this->viewModel = new MobileAppViewModel();
    }
    
    public function index()
    {
        
        $count = $this->viewModel->count();
        $Page  = new Page($count, 20);
        $show  = $Page->show();
        
        $items = $this->viewModel->limit($Page->firstRow . ',' . $Page->listRows)->order('id ASC')->select();
        
        $this->assign('page', $show);
        $this->assign('items', $items);
        $this->display();
    }
    
    public function revertState()
    {
    
        $item = $this->getById();
        
        $item['active'] = (int)(!(boolean)$item['active']);
    
        if ( ! $result = $this->model->save($item)) {
            $this->error($this->model->getError());
        }
    
        if ($result) {
            $this->success('success!!!');
        } else {
            $this->error('error!!!');
        }
        
    }
}