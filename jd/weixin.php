<?php
/**
 * Created by PhpStorm.
 * User: Andy123
 * Date: 2015/12/16
 * Time: 10:55
 */

$appid = "wxca14daf2e2a5bd8a";
$secret = "0d2d14cebd2857566c985077ca090706";
$code = $_GET["code"];
$get_token_url = 'https://api.weixin.qq.com/sns/oauth2/access_token?appid='.$appid.'&secret='.$secret.'&code='.$code.'&grant_type=authorization_code';

$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$get_token_url);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
$res = curl_exec($ch);
curl_close($ch);
$json_obj = json_decode($res,true);
//var_dump($json_obj);
//exit;

    //根据openid和access_token查询用户信息
$access_token = $json_obj['access_token'];
$openid = $json_obj['openid'];
$get_user_info_url = 'https://api.weixin.qq.com/sns/userinfo?access_token='.$access_token.'&openid='.$openid.'&lang=zh_CN';

$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$get_user_info_url);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
$res = curl_exec($ch);
curl_close($ch);

    //解析json

$user_obj = json_decode($res,true);
session_start();
$_SESSION['user']['openid'] = $json_obj['openid'];
//var_dump($_SESSION);
//exit;

require("connect/mysql_connct.php");
//$user_obj=Array ("openid" =>"o2vSjxI7m_4gZTdU2Z1LGxfIWRZY","nickname" => "安迪 ","sex" => 0 ,"language" =>" zh_CN ","city" =>"", "province" =>"" ,"country" =>"中国", "headimgurl" =>" http://wx.qlogo.cn/mmopen/URCFiaEA92c7P50pbhPAef5LqVfe3v3icS5b8F8l61FfxW7iacG7ENW6VzELVUNjqUsg4wXKOBqJpGKeKvVaoZicqg0oLjKdfTs9/0","privilege" => Array());

//判断是否在数据库中已经存在
date_default_timezone_set('PRC');
$time=date("Y-m-d H:i:s",time());
$openid=$json_obj['openid'];
if(empty($_SESSION['user']['openid'])){
    header("Location:https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx07c76327cb6e9fac&redirect_uri=http://jdtrild.haidaofresh.com/jd/weixin.php&response_type=code&scope=snsapi_userinfo&state=1");
    exit;
}
$sr = $pdo->query("SELECT * FROM weixin WHERE openid='$openid'");

if($sr->fetchAll()){
    $pdo->query("UPDATE weixin SET last_login='$time' WHERE openid='$openid'");
}else {
    //插入到数据库中
    if($user_obj['sex']==1){
        $user_obj['sex']="男";
    }elseif($user_obj['sex']==2){
        $user_obj['sex']="女";
    }else{
        $user_obj['sex']="未知";
    }
    $sql="INSERT INTO weixin (nickname,sex,openid,last_login) VALUES ('$user_obj[nickname]','$user_obj[sex]','$json_obj[openid]','$time')";
    //var_dump($sql);
    $pdo->exec($sql);
}
//header("Location:http://haidaofresh.com/changhong/index.php");
    require "smarty.php";
    $smarty->display("index.html");




