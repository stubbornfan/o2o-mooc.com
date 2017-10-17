<?php
namespace app\admin\controller;
use think\Controller;

class Category extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
    public function add(){
        return $this->fetch();
    }
    
    public function save()
    {
        $data = input('post.');
        $validate = validate('Category');
        if( !$validate->scene('add')->check($data)){
            $this->error($validate->getError());
        }
        
        //提交数据到model层
        $res = model('Category')->add($data);
        if($res){
            $this->success('新增成功');
        } else {
            $this->error('新增失败');
        }
        
        
    }

}