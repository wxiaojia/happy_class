<?php
use Qiniu\Auth;
function getQiniu(){
    require_once __DIR__.'/../../Lib/qiniu/autoload.php';
    
    //c方法获取config配置
    $auth = new Auth(C('qiniu.ak'),C('qiniu.sk'));

    // 要上传的空间
    $bucket = C('qiniu.bucket');

    //域名
    $origin =  C('qiniu.origin');

    // 生成上传 Token
    $token = $auth->uploadToken($bucket);

    return array('token' => $token, 'origin'=>$origin);
}