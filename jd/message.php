<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 2016/3/25
 * Time: 15:14
 */
require "smarty.php";
require("connect/mysql_connct.php");
$rs=$pdo->query("SELECT * FROM weixin");
$row=$rs->fetchAll();
//var_dump($row);

$smarty->assign("row",$row);
$smarty->assign("num",count($row));
$smarty->display("tongji.html");