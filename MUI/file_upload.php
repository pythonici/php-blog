<?php
//接受表单传递的文件
$title=$_POST["title"];
$name=$_POST["name"];
$note=$_POST["note"];
$level=$_POST["sort"];
$file = $_FILES["myfile"];
$filename = $file["tmp_name"];
include_once './common/init.php';


//控制上传文件，大小要小于200kb,且为图片格式

    move_uploaded_file($filename,"./images/blog-img/" . $file["name"]);
    $photo=$file["name"];
    $sql = "INSERT INTO page(title,name,detail,likes,imgs) VALUES ('$title','$name','$note','$level','$photo')";
  
   $result = mysqli_query($link, $sql);
   
if($result){
    echo "<script>";
    echo "alert('操作成功');";
    echo "window.location.href='adv.php';";
    echo "</script>";
} else {
    echo "文件上传失败!";
}