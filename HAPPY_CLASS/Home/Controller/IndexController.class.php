<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }

    public function admin(){
        $cover=getQiniu();//获取封面token
        $image=getQiniu();//获取宣传图token
        $video=getQiniu();//获取视频token
//        $class=D("Class");
//        $class->addClass();
        $this->assign('cover',$cover);
        $this->assign('image',$image);
        $this->assign('video',$video);
        $this->display();
    }
    /*
     * 添加班级
     * name 班级名
     * info 班级介绍
     * cover_key 封面key
     * video_key 视频key
     * image_key 宣传图key
     */
    public function addClass(){
        $name=I('post.name');
        $info=I('post.info');
        $cover_key=I('post.cover_key');
        $video_key=I('post.video_key');
        $image_key=I('post.image_key');
        $origin=I('post.origin');
        $cover=$origin . '/' . $cover_key;
        $image=$origin . '/' . $image_key;
        $video=$origin . '/' . $video_key;
        $class=D('class');
        $class->addClass($name,$info,$cover,$image,$video);
    }

    /*
     * 获得班级信息
     * 返回
     * {"data":[{"id":"13","name":"sdvfdsav","info":"sdfvsd","cover":"http:\/\/oga3de3p0.bkt.clouddn.com\/FmLpplRxhEsmt_q1nCbT4lyUOdib","image":"http:\/\/oga3de3p0.bkt.clouddn.com\/FgtXXppVedigRpgGFHouNHuXX61r","video":"http:\/\/oga3de3p0.bkt.clouddn.com\/lo_k2Bp5mxOBHrzTj5VtcDd1XheD"}],"Status":"200"}
     * data array 数据 id 编号 name 班级名 info 班级简介 cover 代表图片url image 封面图片url video 宣传视频url
     * Status 200成功
     */
    public function getClass(){
        $class=D('class');
        $data=$class->getClass();
        $res=array(
            'data'=>$data,
            'Status'=>"200"
        );
        $this->ajaxReturn($res);
    }
}