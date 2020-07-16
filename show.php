<?php
include_once './common/header.php';
if(isset($_POST['key'])){
    $where="where title  like '%{$_POST['key']}%'";
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
			<section class="home-slider js-fullheight owl-carousel">
	      <div class="slider-item js-fullheight" style="background-image:url(./MUI/images/blog-img/images/bg_2.jpg);">
	      	<div class="overlay"></div>
	        <div class="container-fluid">
	          <div class="row no-gutters slider-text slider-text-2 js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
	          <div class="col-md-10 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
	            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Discover the Place</h1>
	            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Find great places to stay, eat, shop, or visit from local experts</p>
	          </div>
	        </div>
	        </div>
	      </div>

	      <div class="slider-item js-fullheight" style="background-image:url(./MUI/images/blog-img/images/bg_3.jpg);">
	      	<div class="overlay"></div>
	        <div class="container-fluid">
	          <div class="row no-gutters slider-text slider-text-2 js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
	          <div class="col-md-10 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
	            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Explore and travel</h1>
	            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Find great places to stay, eat, shop, or visit from local experts</p>
	          </div>
	        </div>
	        </div>
	      </div>
	    </section>
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
	    					<div class="col-md-12">
	    						<div class="blog-entry ftco-animate">
	    							<a href="single.php?id=<?=$value["id"]?>" class="img" style="background-image: url(images/<?=$value["imgs"]?>);"></a>
	    							<div class="text pt-2 mt-3">
					          	<span class="category mb-1 d-block"><a href="#"><?=$value["tag"]?></a></span>
				              <h3 class="mb-4"><a href="single.php?id=<?=$value["id"]?>"><?=$value["title"]?></a></h3>
				              <p class="mb-4"><?=$value["detail"]?></p>
				              <div class="author mb-4 d-flex align-items-center">
				            		<a href="#" class="img" style="background-image: url(images/person_1.jpg);"></a>
				            		<div class="ml-3 info">
				            			
				            			<h3><a href="#"><?=$value["name"]?></a>, <span><?=$value["time"]?></span></h3>
				            		</div>
				            	</div>
				              <div class="meta-wrap d-md-flex align-items-center">
				              	<div class="half order-md-last text-md-right">
					              	<p class="meta">
					              		<span><i class="icon-heart"></i><?=$value["likes"]?></span>
					              		<span><i class="icon-eye"></i><?=$value["view"]?></span>
					              		<span><i class="icon-comment"></i><?=$value["talk"]?></span>
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
	    				</div>
	    				<div class="row mt-5">
			      
			        </div>
	    			</div><!-- END-->
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
