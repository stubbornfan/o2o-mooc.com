<?php
namespace app\common\model;
use think\Model;

class Category extends Model
{
    protected $autoWriteTimestamp = true;
    
    //添加数据
    public function add($data){
        $data['status']= 1;
       return $this->save($data);
    }
    //获取一级栏目的信息\
    public function getNormalFirstCategory(){
        $data = [
           'status'=>1,
           'parent_id' =>0, 
        ];
        $order = [
            'id'=>'desc',
        ];
        return $this->where($data)
                     ->order($order)
                     ->select();
        
        
    }
    
    
    

}