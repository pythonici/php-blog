<?php
$name=$_POST["name"];
$pwd=$_POST["pwd"];
include_once './common/init.php';
 $sql = "INSERT INTO user(username,pwd) VALUES ('$name','$pwd')";
    $result = mysqli_query($link, $sql);
    if ($result) {
    echo "<script>";
    echo "alert('操作成功,请登录');";
    echo "window.location.href='login.php';";
    echo "</script>";
} else {
    echo "fail" . mysqli_error($link);
}