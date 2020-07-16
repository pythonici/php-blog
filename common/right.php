<div class="col-lg-4 sidebar ftco-animate">
	            <div class="sidebar-box">
                        <form action="./show.php" class="search-form"  method="post">
	                <div class="form-group">
	                  <span class="icon icon-search"></span>
	                  <input type="text"  name="key" class="form-control" placeholder="输入文章标题关键字查找">
	                </div>
	              </form>
	            </div>
	            <div class="sidebar-box ftco-animate">
	            	<h3 class="sidebar-heading">文章分类</h3>
	              <ul class="categories">
	                <li><a href="fashion.php?fl=1">时尚<span></span></a></li>
	                <li><a href="fashion.php?fl=2">科技<span></span></a></li>
	                <li><a href="fashion.php?fl=3">旅游<span></span></a></li>
                        <li><a href="./photography.php">摄影<span></span></a></li>
	              </ul>
	            </div>

	            <div class="sidebar-box ftco-animate">
	              <h3 class="sidebar-heading">受欢迎的文章</h3>
                      <?php
                       $sql="select * from page order by likes  limit 3";
                      $top= selectAll($sql, $link);
                    foreach ($top as $value):
                      ?>
	              <div class="block-21 mb-4 d-flex">
	                <a class="blog-img mr-4" style="background-image: url(./MUI/images/blog-img/<?=$value["imgs"]?>);"></a>
	                <div class="text">
	                  <h3 class="heading"><a href="single.php?id=<?=$value["id"]?>"><?=$value["title"]?></a></h3>
	                  <div class="meta">
	                    <div><a href="#"><span class="icon-calendar"></span><?=$value["time"]?></a></div>
	                    <div><a href="#"><span class="icon-person"></span> <?=$value["name"]?></a></div>
	                    <div><a href="#"><span class="icon-chat"></span> <?=$value["talk"]?></a></div>
	                  </div>
	                </div>
	              </div>
	              <?php
                  endforeach;
                      ?>
	             
	            </div>

	         

			

	          


	            <div class="sidebar-box ftco-animate">
	              <h3 class="sidebar-heading">今日语录</h3>
	              <p>我们欣赏那些了解自己局限性的人，他们知道在什么时候该停下来。现代生活只是一味地朝前迈进、不知停歇，带来的后果就是超过一个人所能承受的极限。</p>
	            </div>
	          </div>