<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    
    public function index()
    {
        
        $a = 'index page';
        $this->assign('a', $a);
        $this->display();
    }
    
    public function apps()
    {
        
        $a = 'index apps page';
        $this->assign('a', $a);
        $this->display();
        
    }
}