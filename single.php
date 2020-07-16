<?php
include_once './common/header.php';
$id=$_GET["id"];
if(isset($id)){
$sql3="update  page  set  view=view+1  where id=$id";
$result= mysqli_query($link, $sql3);
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
	    			<div class="col-lg-8 ftco-animate">
                                    <?php
                                    $sql="select * from page where id=$id ";
                     $infos= selectOne($sql, $link);
                                    ?>
	            <h2 class="mb-3 font-weight-bold"><?=$infos["title"]?></h2>
	            <p><?=$infos["detail"]?></p>
	
	            <div class="tag-widget post-tag-container mb-5 mt-5">
	              <div class="tagcloud">
	                <a href="#" class="tag-cloud-link"><?=$infos["tag"]?></a>
	                
                        
	              </div>
	            </div>
                    <p><a href="talk.php?id=<?=$id?>" class="btn py-2">发表评论<span class="ion-ios-arrow-forward"></span></a></p>
	            
	           


	            <div class="pt-5 mt-5">
	              <h3 class="mb-5 font-weight-bold"><?=$infos["talk"]?>条评论</h3>
	              <ul class="comment-list">
                         
                        <?php
                      $sql="select * from say where id=$id";
                      $infos= selectAll($sql, $link);
                      if($infos):
                      foreach ($infos as $value):
                        ?>
	                <li class="comment">
	                  <div class="vcard bio">
	                    <img src="./MUI/images/blog-img/person_1.jpg" alt="Image placeholder">
	                  </div>
	                  <div class="comment-body">
	                    <h3><?=$value["name"]?></h3>
	                    <div class="meta"><?=$value["time"]?></div>
	                    <p><?=$value["pr"]?></p>
	                  
	                  </div>
	                </li>
<?php
endforeach;
endif;
?>
	              </ul>
	              <!-- END comment-list -->
	              
	            
	            </div>
                    
	          </div> <!-- .col-md-8 -->
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