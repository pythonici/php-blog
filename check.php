<?php
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$yhm=$_POST["name"];
$psw=$_POST["pwd"];
include_once './common/init.php';
include_once './common/function.php';

$sql="select * from  user where  username='$yhm' and pwd='$psw'";
$row= selectOne($sql);
if($row){
    $_SESSION["uname"]=$row["username"];
    echo "<script>";
    echo "alert('登录成功');";
    echo "window.location.href='index.php';";
    echo "</script>";
} else {
    echo "<script>";
    echo "alert('登录失败,自动返回首页');";
    echo "window.location.href='index.php';";
    echo "</script>";
}


