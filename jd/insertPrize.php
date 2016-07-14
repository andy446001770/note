<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 2016/4/13
 * Time: 17:03
 */
class insertPrize{
    public $openid;
    public $life_stage;
    public $industry;
    public $income;
    public $sex;

    /**
     * @param $_openid
     * @param $_prize
     * 必须赋值才能进行操作。实例化时直接运行
     */
    function __construct($_openid,$_life_stage,$_industry,$_income,$_sex){
        $this->openid=$_openid;
        $this->life_stage=$_life_stage;
        $this->industry=$_industry;
        $this->income=$_income;
        $this->sex=$_sex;
    }

    /**
     *将获得的奖品和个人信息插入数据库
     */
    function insert(){
        $pdo = new PDO("mysql:host=localhost:3307; dbname=changhong", "root","usbw");

        $pdo->query("SET NAMES utf8");
//        $sql="UPDATE weixin SET get_prize=get_prize+1 WHERE openid="."'$this->openid'";
//        $sr=$pdo->query($sql);
        $sql="UPDATE weixin SET  life_stage="."'$this->life_stage'".",industry="."'$this->industry'"." ,income="."'$this->income'".",sex="."'$this->sex'"." WHERE openid="."'$this->openid'";
        $sr=$pdo->query($sql);
        if($sr){
            echo "success";
        }
    }
}
session_start();
$openid=$_SESSION['user']['openid'];
//$prize=$_POST['prize'];
$life_stage=$_POST['life_stage'];
$industry=$_POST['industry'];
$income=$_POST['income'];
$sex=$_POST['sex'];
/*$openid="o2vSjxI7m_4gZTdU2Z1LGxfIWRZY";
$prize=2;
$life_stage="中等";
$industry="电子信息";
$income=2500;*/
$class=new insertPrize($openid,$life_stage,$industry,$income,$sex);
$class->insert();