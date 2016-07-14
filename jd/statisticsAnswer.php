<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 2016/4/13
 * Time: 17:39
 */
class statisticsAnswer{
    public $question;
    function __construct($_question){
        $this->question=$_question;
    }
    function getAnswers(){
        $pdo = new PDO("mysql:host=localhost:3307; dbname=changhong", "root","usbw");
        $pdo->query("SET NAMES utf8");
        $data=array();
        for($i=1;$i<=6;$i++) {
            $sql = "SELECT count(*) AS num FROM weixin WHERE $this->question=$i OR $this->question='%$i%'";
            $sr = $pdo->query($sql);
            $num=$sr->fetch();
            $data[$i-1]=$num['num'];
        }
        return $data;
    }
    function getAllusers(){
        $pdo = new PDO("mysql:host=localhost:3307; dbname=changhong", "root","usbw");
        $pdo->query("SET NAMES utf8");
        $sql = "SELECT count(*) AS num FROM weixin WHERE $this->question<>0 AND $this->question<>"."''";
        $sr = $pdo->query($sql);
        $num=$sr->fetch();
        return $num['num'];
    }
    function getPercent(){
        $pdo = new PDO("mysql:host=localhost:3307; dbname=changhong", "root","usbw");
        $pdo->query("SET NAMES utf8");
        $sql = "SELECT count(*) AS num FROM weixin WHERE $this->question<>0 AND $this->question<>"."''";
        $sr = $pdo->query($sql);
        $num=$sr->fetch();
        $all=$num['num'];
        $data=array();
        for($i=1;$i<=6;$i++) {
            $sql = "SELECT count(*) AS num FROM weixin WHERE $this->question=$i OR $this->question='%$i%'";
            $sr = $pdo->query($sql);
            $num=$sr->fetch();
            if(intval($all)!==0) {
                $data[$i - 1] = round((intval($num['num']) / intval($all)),4) * 100;
            }else{
                $data[$i - 1] =0;
            }
        }
        return $data;
    }
}
$class=new statisticsAnswer("question1");
$data1=$class->getAnswers();
$num1=$class->getAllusers();
$all1=$class->getPercent();
$class=new statisticsAnswer("question2");
$data2=$class->getAnswers();
$num2=$class->getAllusers();
$all2=$class->getPercent();
$class=new statisticsAnswer("question3");
$data3=$class->getAnswers();
$num3=$class->getAllusers();
$all3=$class->getPercent();
$class=new statisticsAnswer("question4");
$data4=$class->getAnswers();
$num4=$class->getAllusers();
$all4=$class->getPercent();
$class=new statisticsAnswer("question5");
$data5=$class->getAnswers();
$num5=$class->getAllusers();
$all5=$class->getPercent();
$class=new statisticsAnswer("question6");
$data6=$class->getAnswers();
$num6=$class->getAllusers();
$all6=$class->getPercent();
$class=new statisticsAnswer("question7");
$data7=$class->getAnswers();
$num7=$class->getAllusers();
$all7=$class->getPercent();
$class=new statisticsAnswer("question8");
$data8=$class->getAnswers();
$num8=$class->getAllusers();
$all8=$class->getPercent();
$class=new statisticsAnswer("question9");
$data9=$class->getAnswers();
$num9=$class->getAllusers();
$all9=$class->getPercent();
$class=new statisticsAnswer("question10");
$data10=$class->getAnswers();
$num10=$class->getAllusers();
$all10=$class->getPercent();
$class=new statisticsAnswer("question11");
$data11=$class->getAnswers();
$num11=$class->getAllusers();
$all11=$class->getPercent();
//var_dump($all1);
//exit;
require("smarty.php");
$smarty->assign("question1",$data1);
$smarty->assign("question2",$data2);
$smarty->assign("question3",$data3);
$smarty->assign("question4",$data4);
$smarty->assign("question5",$data5);
$smarty->assign("question6",$data6);
$smarty->assign("question7",$data7);
$smarty->assign("question8",$data8);
$smarty->assign("question9",$data9);
$smarty->assign("question10",$data10);
$smarty->assign("question11",$data11);
$smarty->assign("num1",$num1);
$smarty->assign("num2",$num2);
$smarty->assign("num3",$num3);
$smarty->assign("num4",$num4);
$smarty->assign("num5",$num5);
$smarty->assign("num6",$num6);
$smarty->assign("num7",$num7);
$smarty->assign("num8",$num8);
$smarty->assign("num9",$num9);
$smarty->assign("num10",$num10);
$smarty->assign("num11",$num11);
$smarty->assign("all1",$all1);
$smarty->assign("all2",$all2);
$smarty->assign("all3",$all3);
$smarty->assign("all4",$all4);
$smarty->assign("all5",$all5);
$smarty->assign("all6",$all6);
$smarty->assign("all7",$all7);
$smarty->assign("all8",$all8);
$smarty->assign("all9",$all9);
$smarty->assign("all10",$all10);
$smarty->assign("all11",$all11);
$smarty->display("answer.html");
//var_dump($data1);
