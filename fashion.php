<?php
include_once './common/header.php';
if(isset($_GET['fl'])){
    if($_GET['fl']=='1'){
        $where="where tag='时尚'";
    }elseif($_GET['fl']=='2') {
           $where="where tag='科技'";
    }elseif ($_GET['fl']=='3') {
           $where="where tag='旅游'";
    } 
}else{
    $where="";
}
?>
  <body>

	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<?php
                  include_once './common/side.php';
                ?> <!-- END COLORLIB-ASIDE -->
		<div id="colorlib-main">
			<div class="hero-wrap js-fullheight" style="background-image: url(./MUI/images/blog-img/bg_1.jpg);" data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
				<div class="js-fullheight d-flex justify-content-center align-items-center">
					<?php
                                        include_once './common/col-md.php';
                                        ?>
				</div>
			</div>
			<section class="ftco-section">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-lg-8">
	    				<div class="row">
                                            <?php
                                             $sql="select * from page  ";
                                               $sql=$sql.$where;
                                               $infos= selectAll($sql, $link);
                                               foreach ($infos as $value):
                                            ?>
			    			<div class="col-md-6">
			    				<div class="blog-entry ftco-animate">
										<a href="single.php?id=<?=$value["id"]?>" class="img img-2" style="background-image: url(./MUI/images/blog-img/<?=$value['imgs']?>);"></a>
										<div class="text text-2 pt-2 mt-3">
											<span class="category mb-3 d-block"><a href="#"><?=$value['tag']?></a></span>
				              <h3 class="mb-4"><a href="#"><?=$value['title']?></a></h3>
				              <p class="mb-4"><?=mb_substr($value["detail"],0,37,'utf-8')?></p>
				              <div class="author mb-4 d-flex align-items-center">
				            		<a href="#" class="img" style="background-image: url(./MUI/images/blog-img/person_2.jpg);"></a>
				            		<div class="ml-3 info">
				            			
				            			<h3><a href="#"><?=$value['name']?></a>, <span><?=$value['time']?></span></h3>
				            		</div>
				            	</div>
				              <div class="meta-wrap align-items-center">
				              	<div class="half order-md-last">
					              	<p class="meta">
					              		<span><i class="icon-heart"></i><?=$value['likes']?></span>
					              		<span><i class="icon-eye"></i><?=$value['view']?></span>
					              		<span><i class="icon-comment"></i><?=$value['talk']?></span>
					              	</p>
				              	</div>
				              	<div class="half">
					              	<p><a href="single.php?id=<?=$value["id"]?>" class="btn btn-primary p-3 px-xl-4 py-xl-3">阅读更多</a></p>
				              	</div>
				              </div>
				            </div>
									</div>
			    			</div>
			    			<?php
                                        endforeach;
                                                ?>
			    			
			    		</div><!-- END-->
			    	</div>
	    			<?php
                                                include_once './common/right.php';
                                ?><!-- END COL -->
	    		</div>
	    	</div>
	    </section>
	 <?php
                                        include_once './common/footer.php';
 ?>
		</div><!-- END COLORLIB-MAIN -->
	</div><!-- END COLORLIB-PAGE -->

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<?php
include_once './common/js.php';
?>
    
  </body>
</html>