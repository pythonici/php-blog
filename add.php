<?php
include_once './common/init.php';
include_once './common/function.php';
$id=$_GET["id"];
$sql2="update  page  set  likes=likes+1  where id=$id";
$result= mysqli_query($link, $sql2);
if($result){
    echo "<script>";
    echo "alert('谢谢你的喜欢');";
    echo "window.location.href='index.php';";
    echo "</script>";
}

