<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 2016/3/25
 * Time: 15:09
 */
require "smarty.php";
session_start();
if(isset($_SESSION['name'])&&$_SESSION['name']!==0){
    $smarty->display("admin-table.html");
}