<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 2016/4/18
 * Time: 16:26
 */
class insertBaseInfo{
    public $openid;
    public $user_name;
    public $mobile;
    public $address;
    public $jd_account;

    /**
     * @param $_openid
     * @param $_prize
     * 必须赋值才能进行操作。实例化时直接运行
     */
    function __construct($_openid,$_user_name,$_mobile,$_address,$_jd_account){
        $this->openid=$_openid;
        $this->user_name=$_user_name;
        $this->mobile=$_mobile;
        $this->address=$_address;
        $this->jd_account=$_jd_account;
    }

    /**
     *将获得的奖品和个人信息插入数据库
     */
    function insert(){
        $pdo = new PDO("mysql:host=localhost:3306; dbname=jd", "root","");

        $pdo->query("SET NAMES utf8");
        $sql="UPDATE weixin SET user_name="."'$this->user_name'".",mobile="."'$this->mobile'".",address="."'$this->address'".",jd_account="."'$this->jd_account'"." WHERE openid="."'$this->openid'";
        $sr=$pdo->query($sql);
        if($sr){
            echo "success";
        }
    }
}
$user_name=$_POST['name'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$jd_account=$_POST['jd_account'];
//$openid="oZBeSt5KEyUlD5vg5Zc0fvUhqVeQ";
//$question="question1";
//$answer="1,2,3";
session_start();
$openid=$_SESSION['user']['openid'];
$class=new insertBaseInfo($openid,$user_name,$mobile,$address,$jd_account);
$class->insert();