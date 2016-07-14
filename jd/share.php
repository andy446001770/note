<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 2016/4/18
 * Time: 16:16
 */
require("connect/mysql_connct.php");
session_start();
$openid=$_SESSION['user']['openid'];
$sql="UPDATE weixin SET is_share=1 WHERE openid="."'$openid'";
$sr=$pdo->query($sql);
var_dump($sql);