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
        $this->showItem();
        
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
        
        if (IS_POST) {
            
            if ( ! $result = $this->model->where(['id' => I('get.id')])->delete()) {
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
    
    private function showItem(): void
    {
        $item = $this->getById();
        $this->assign('model', $item);
        $this->display();
    }
    
    protected function getById()
    {
        $id = I('get.id');
        if (empty($id)) {
            $this->redirect('index');
        }
        $item = $this->model->where(['id' => $id])->limit(1)->select();
        if (count($item) > 0) {
            return $item[0];
        }
        $this->error('error!!!');
        $this->redirect('index');
    }
    
}