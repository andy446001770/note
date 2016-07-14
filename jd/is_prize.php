<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 2016/5/8
 * Time: 11:00
 */
session_start();
$openid=$_SESSION['user']['openid'];
require_once("connect/mysql_connct.php");
$sql="SELECT get_prize FROM weixin WHERE openid='$openid'";
$sr=$pdo->query($sql);
$row=$sr->fetchAll();
if(intval($row[0]['get_prize'])==2){
    echo 1;
}elseif(intval($row[0]['get_prize'])==1){
    echo 2;
}else{
    echo 0;
}