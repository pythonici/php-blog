<?php 
function selectOne($sql){
    global $link;   
    $result= mysqli_query($link, $sql);
    if($result){
            $row=mysqli_fetch_assoc($result);
            return $row;
           
}else {echo "查询失败".mysqli_error($link);}

}
function selectAll($sql){
    global $link;   
    $result= mysqli_query($link, $sql);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            $rows[]=$row;
    }
}else {echo "查询失败".mysqli_error($link);}
return $rows;
}
function  dp($sql,$link){
    global $link;
    $n=5;
$result= mysqli_query($link, $sql);
$num= mysqli_num_rows($result);
$totalpage=ceil($num/$n);
return $totalpage;
    }


