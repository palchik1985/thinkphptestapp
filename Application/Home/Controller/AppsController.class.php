<?php

namespace Home\Controller;

use Think\Controller;
use Think\Page;

class AppsController extends Controller
{
    
//    protected $application;
    
    public function __construct()
    {
        parent::__construct();
        
//        $this->application = new MobileApp();
    }
    
    public function index()
    {
        $model = D('MobileAppView');
        
        $count = $model->count();
        $Page = new \Extend\Page($count, 20);
        $show = $Page->show();
    
        $items = $model->limit($Page->firstRow.','.$Page->listRows)->order('id ASC')->select();
        
        $this->assign('page', $show);
        $this->assign('items', $items);
        $this->display();
    }
    
    public function add()
    {
        $this->display();
    }
    
    public function store()
    {
        if(IS_POST){
            
            $data = I('post.');
            
            $MobileApp = D('MobileApp');
            
            if(!$data = $MobileApp->create($data)){
                $this->error($MobileApp->getError());
            } else {
                $result = $MobileApp->add();
            }
            
            if($result){
                $this->success('success!!!');
            } else {
                $this->error('error!!!');
            }
        }
        
        $this->redirect('index');
    }
    
    public function item($id)
    {
        
        
        
        $this->display('item_page');
    }
}