<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 2016/4/13
 * Time: 15:13
 */

class insertAnswer{
    public $openid;
    public $question;
    public $answer;

    /**
     * @param $_openid
     * @param $_question
     * @param $_answer
     * 必须赋值才能进行操作。实例化时直接运行
     */
    function __construct($_openid,$_question,$_answer ){
        $this->openid=$_openid;
        $this->question=$_question;
        $this->answer=$_answer;
    }

    /**
     *将答案插入数据库
     */
    function insert(){
        $pdo = new PDO("mysql:host=localhost:3307; dbname=changhong", "root","usbw");

        $pdo->query("SET NAMES utf8");
        $sql="UPDATE weixin SET $this->question="."'$this->answer'"." WHERE openid="."'$this->openid'";
//        var_dump($sql);
//        exit;
        $sr=$pdo->query($sql);
        if($sr){
            echo "success";
        }
    }
}
//session_start();
//var_dump($_SESSION);
//exit;
session_start();
$openid=$_SESSION['user']['openid'];
$question=$_POST['question'];
$answer=$_POST['answer'];
//$openid="oZBeSt0x9FhY6CkNWVRewMnouzLQ";
//$question="question1";
//$answer="1,2,3";
$class=new insertAnswer($openid,$question,$answer);
$class->insert();