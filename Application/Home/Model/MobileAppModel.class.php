<?php

namespace Home\Model;

use Think\Model;

class MobileAppModel extends Model
{
    
    protected $tableName = 'apps';
    protected $_validate = [
        ['active', [0, 1], '', 3, 'in'],
        //@see https://github.com/CieloSun/StudentManageSystem/blob/master/Application/Sms/Model/TeacherModel.class.php
    ];
    
    protected $_auto = [
        ['active', 'setActive', 1, 'callback'],
    ];
    
    function _before_write(&$data)
    {
        
        if (IS_POST) {
            $data[ 'active' ] = $this->setActive();
        }
        
        parent::_before_write($data);
    }
    
    function setActive()
    {
        
        if (I('post.active') == 'on') {
            return 1;
        }
        
        return 0;
    }
}