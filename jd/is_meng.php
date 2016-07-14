<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 2016/4/19
 * Time: 14:51
 */
require("connect/mysql_connct.php");
session_start();
$openid=$_SESSION['user']['openid'];
$sql="SELECT count(*) AS num FROM weixin WHERE life_stage<>'NULL' AND openid="."'$openid'";
$sr=$pdo->query($sql);
$rw=$sr->fetchAll();
echo $rw[0]['num'];
//var_dump($rw);
//var_dump($sql);