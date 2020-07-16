<?php
session_start();

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$yhm=$_POST["yhm"];
$psw= $_POST["pwd"];
$code=$_POST["check"];
include_once './common/init.php';
include_once './common/function.php';
if($code==$_SESSION['code']){
$sql="select * from  user where  username='$yhm' and pwd='$psw'";
$row= selectOne($sql);
if($row){
   
    echo "<script>";
    echo "alert('登录成功');";
    echo "window.location.href='index.php';";
    echo "</script>";
} else {
    echo "<script>";
    echo "alert('登录失败');";
    echo "window.location.href='login.php';";
echo "</script>";

}} else {
    
    echo "<script>";
    echo "alert('验证码错误');";
    echo "window.location.href='login.php';";
echo "</script>";

}