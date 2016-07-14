<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 2016/3/25
 * Time: 9:48
 */
//require("connect/mysql_connct.php");
require "smarty.php";
session_start();
//var_dump($_SESSION);
//exit;
if(empty($_SESSION['user']['openid'])){
    header("Location:https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxca14daf2e2a5bd8a&redirect_uri=http://jdtrild.haidaofresh.com/jd/weixin.php&response_type=code&scope=snsapi_userinfo&state=1");
    exit;
}
$smarty->display("index.html");
