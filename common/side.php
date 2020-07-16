<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
			<h1 id="colorlib-logo"><a href="index.php">闫婧蓉<span>.</span></a></h1>
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
                                    <?php
                                    $sql="select id,time from page  order by time ";
                                    $row= selectOne($sql, $link);
                                    ?>
					<li   class="colorlib-active"><a href="index.php">首页</a></li>
					<li><a href="photography.php">照片墙</a></li>
                                        <li><a href="travel.php">所有文章</a></li>
                                        <li><a href="login.php">游客登录</a></li>
                                        <li><a href="about.php">关于我</a></li>
                                        <li><a href="./MUI/login.php">后台管理<span></span></a></li>
				</ul>
			</nav>

			<div class="colorlib-footer">
				<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
		
				<ul>
					<li><a href="https://www.zhihu.com/"><i class="icon-facebook"></i></a></li>
					<li><a href="https://www.douban.com/"><i class="icon-twitter"></i></a></li>
					<li><a href="https://www.zhihu.com/"><i class="icon-instagram"></i></a></li>
					<li><a href="https://www.douban.com/"><i class="icon-linkedin"></i></a></li>
				</ul>
			</div>
		</aside>

