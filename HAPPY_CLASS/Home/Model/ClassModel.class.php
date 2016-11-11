<?php
/**
 * Created by PhpStorm.
 * User: 风雨雾凇
 * Date: 2016/11/8
 * Time: 10:42
 */
namespace Home\Model;
use Think\Model;
class ClassModel extends Model{
    /*
     * 添加班级信息
     * name 班级名称
     * info 班级信息
     * cover 封面token url
     * image 宣传图token url
     * video 视频token url
     */
    public function addClass($name,$info,$cover,$image,$video){
        $add['name']=$name;
        $add['info']=$info;
        $add['cover']=$cover;
        $add['image']=$image;
        $add['video']=$video;
        $class=M('class');
        $class->add($add);
    }
    /*
     * 获得班级信息
     */
    public function getClass(){
        $class=M('class');
        $res=$class->select();
        return $res;
    }

}