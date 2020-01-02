<?php

namespace Common\Controller;

use Think\Controller;

class BaseController extends Controller
{
    
    protected $model;
    protected $viewModel;
    
    protected $pathToTemplate;
    
    
    public function add()
    {
        
        $this->display();
    }
    
    public function edit()
    {
        $this->showItem();
    }
    
    public function store()
    {
        
        if (IS_POST) {
            
            $data = I('post.');
    
            $verify = new \Think\Verify();
            if(!$verify->check($data['verification_code'])){
                $this->error('Verification code is not valid!');
            }
            
            if ( ! $data = $this->model->create($data)) {
                $this->error($this->model->getError());
            } else {
                $result = $this->model->add();
            }
            
            if ($result) {
                $this->success('success!!!');
            } else {
                $this->error('error!!!');
            }
        }
        
        $this->redirect('index');
    }
    
    public function show()
    {
        $item = $this->getById();
        if(empty($item) || $item['active'] != 1){
            $this->error('Application is not active!');
        }
        $this->assign('model', $item);
        $this->display();
        
    }
    
    public function update()
    {
        
        if (IS_POST) {
            
            $data = I('post.');
            
            if ( ! $result = $this->model->where(['id' => I('get.id')])->save($data)) {
                $this->error($this->model->getError());
            }
            
            if ($result) {
                $this->success('success!!!');
            } else {
                $this->error('error!!!');
            }
        }
        
        $this->redirect('index');
    }
    
    public function destroy()
    {
    
        if ( ! $result = $this->model->where(['id' => I('get.id')])->delete()) {
            $this->error($this->model->getError());
        }
    
        if ($result) {
            $this->success('success!!!');
        } else {
            $this->error('error!!!');
        }
        
        $this->redirect('index');
    }
    
    private function showItem(): void
    {
        $item = $this->getById();
        if(empty($item)){
            $this->error('Page is not found');
        }
        $this->assign('model', $item);
        $this->display();
    }
    
    protected function getById()
    {
        $id = I('get.id');
        if (empty($id)) {
            $this->redirect('index');
        }
        $item = $this->model->find($id);
        if (!empty($item)) {
            return $item;
        }
        $this->error('error!!!');
        $this->redirect('index');
    }
    
}