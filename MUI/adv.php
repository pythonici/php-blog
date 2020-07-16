<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="css/pintuer.css">
<link rel="stylesheet" href="css/admin.css">
<script src="js/jquery.js"></script>
<script src="js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong></div>
  <div class="padding border-bottom">  
  <button type="button" class="button border-yellow" onclick="window.location.href='add.php'"><span class="icon-plus-square-o"></span> 添加内容</button>
  </div>
  <table class="table table-hover text-center">
    <tr>
      <th width="10%">ID</th>
      <th width="20%">图片</th>
      <th width="15%">标题</th>
      <th width="20%">描述</th>
      <th width="10%">喜欢</th>
      <th width="10%">浏览</th>
      <th width="15%">操作</th>
    </tr>
   <?php
include_once './common/init.php';
include_once './common/function.php';
                            $sql="select  * from page ";
                            $n=5;
                            $page=isset($_GET["page"])? $_GET["page"]:1;
                            $m=($page-1)*$n;
                            $limit=" limit $m,$n";
                            $sql.=$limit;
                             $info= selectAll($sql);
                           
                             foreach ($info as $value):
      ?>
    <tr>
      <td><?=$value["id"]?></td>     
      <td><img src="images/blog-img/<?=$value["imgs"]?>" alt="" width="120" height="50" /></td>     
      <td><?=$value["title"]?></td>
      <td><?=mb_substr($value["detail"],0,20,'utf-8')?>...</td>
      <td><?=$value["likes"]?></td>
       <td><?=$value["view"]?></td>
      <td><div class="button-group">
              <a class="button border-main" href="fx.php?id=<?=$value["id"]?>"  onclick="return del(1,1)"><span class="icon-edit"></span> 修改</a>
      
      </div></td>
    </tr>
    <?php
  endforeach;
    ?>
     <tr><td colspan="8"><div class="pagelist">
          <a  href="adv.php?page=<?=$page==1?$page=1:$page-1?>" >上一页</a>
<?php
            $sql="select * from page ";
           
            $totalpage= dp($sql, $link);
            for($i=1;$i<=$totalpage;$i++):
                                        
?>
<a    href="adv.php?page=<?=$i?>"   ><?=$i?></a>
<?php
endfor;
?>
<a  href="adv.php?page=<?=$page== $totalpage?$page:$page+1?>"   >下一页</a>
        </div></td>
      </tr>
  </table>
</div>
<script type="text/javascript">
function del(id,mid){
	if(confirm("您确定要修改吗?")){
	
	}
}
</script>

</body></html>
