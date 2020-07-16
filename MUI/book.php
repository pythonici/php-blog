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
    <form method="post" action="book.php">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 留言管理</strong></div>
    <div class="padding border-bottom">
      <ul class="search">
        <li>
          <button type="button"  class="button border-green" id="checkall"><span class="icon-check"></span> 全选</button>
          <button type="submit" class="button border-red"><span class="icon-trash-o"></span> 批量删除</button>
        </li>
      </ul>
    </div>
    <table class="table table-hover text-center">
      <tr>
        <th width="120">文章ID</th>
        <th>姓名</th>       
        
        <th width="25%">评论</th>
         <th width="120">留言时间</th>
        <th>操作</th>       
      </tr>      
       <?php
include_once './common/init.php';
include_once './common/function.php';
                            $sql="select  * from say ";
                             $info= selectAll($sql);
                            
                           
                             foreach ($info as $value):
      ?>
        <tr>
          <td><input type="checkbox" name="id[]" value="1" />
            <?=$value["id"]?></td>
          <td><?=$value["name"]?></td>       
          <td><?=$value["pr"]?></td>
          <td><?=$value["time"]?></td>
          <td><div class="button-group"> <a class="button border-red" href="delete.php?pid=<?=$value["pid"]?>" onclick="return del(1)"><span class="icon-trash-o"></span> 删除</a> </div></td>
        </tr>
        <?php
        endforeach;
        ?>
        
        
      <tr><td colspan="8"><div class="pagelist">
          <a  href="book.php?page=<?=$page==1?$page=1:$page-1?>" >上一页</a>
<?php
            $sql="select * from say ";
           
            $totalpage= dp($sql, $link);
            for($i=1;$i<=$totalpage;$i++):
                                        
?>
<a    href="book.php?page=<?=$i?>"   ><?=$i?></a>
<?php
endfor;
?>
<a  href="book.php?page=<?=$page== $totalpage?$page:$page+1?>"   >下一页</a>
        </div></td>
      </tr>
    </table>
  </div>
</form>
<script type="text/javascript">

function del(id){
	if(confirm("您确定要删除吗?")){
	
	}
}

$("#checkall").click(function(){ 
  $("input[name='id[]']").each(function(){
	  if (this.checked) {
		  this.checked = false;
	  }
	  else {
		  this.checked = true;
	  }
  });
})

function DelSelect(){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){
		var t=confirm("您确认要删除选中的内容吗？");
		if (t==false) return false; 		
	}
	else{
		alert("请选择您要删除的内容!");
		return false;
	}
}

</script>
</body></html>