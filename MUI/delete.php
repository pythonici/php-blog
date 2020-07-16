<?php
$id = $_GET["pid"];
require "./common/init.php";
$sql_delect = "DELETE FROM say WHERE pid=$id";
$sql_delect_result = mysqli_query($link, $sql_delect);
if ($sql_delect_result) {
    echo "<script>";
    echo "alert('删除成功');";
    echo "window.location.href='book.php';";
    echo "</script>";
} else {
echo mysqli_error($link);

}

