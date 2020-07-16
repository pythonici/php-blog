 
<?php
include_once './common/header.php';
$id=$_GET["id"]

?>


	                
                        <div style="width:600px;height:800px;">
                            <form action="insert.php?id=<?=$id?>" class="p-3 p-md-5 bg-light" method="post">


	                  <div class="form-group">
	                    <label for="message">输入评论</label>
	                    <textarea name="pr" id="message" cols="30" rows="10" class="form-control"></textarea>
	                  </div>
	                  <div class="form-group">
	                    <input type="submit" value="提交" class="btn py-3 px-4 btn-primary">
	                  </div>

	                </form>
                            </div>
