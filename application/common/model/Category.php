<?php
namespace app\common\model;
use think\Model;

class Category extends Model
{
    protected $autoWriteTimestamp = true;
    
    public function add($data){
        $data['status']= 1;
       return $this->save($data);
    }

}