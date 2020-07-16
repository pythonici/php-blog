<?php
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if(isset($_SESSION["uname"])){
$pr= $_POST["pr"];
$id= $_GET["id"];
$name= $_SESSION["uname"];
include_once './common/init.php';
include_once './common/function.php';
date_default_timezone_set('Asia/Shanghai');
$time=date("Y-m-d H:i:s");
$sql = "INSERT INTO say(id,time,pr,name) VALUES ('$id','$time','$pr','$name')";
$rusult=mysqli_query($link, $sql);
if($rusult){
$sql1="update  page  set  talk=talk+1  where id=$id";
$result= mysqli_query($link, $sql1);
    echo "<script>";
    echo "alert('评论成功');";
    echo "window.history.go(-2);";
    echo "</script>";
}
}else {
    echo "<script>";
    echo "alert('请先登录');";
    echo "window.location.href='login.php';";
    echo "</script>";
}

