<?php

namespace Home\Model;

use Think\Model;

class MobileAppModel extends Model
{
    protected $tableName = 'apps';
    protected $_validate = array(
        array('active', array(0,1), '', 3, 'in'),
        //@see https://github.com/CieloSun/StudentManageSystem/blob/master/Application/Sms/Model/TeacherModel.class.php
    );
    
    protected $_auto = array(
        array('active', 'setActive', 1, 'callback'),
    );
    
    function setActive(){
        if(I('post.active') == 'on'){
            return 1;
        }
        return 0;
    }
}