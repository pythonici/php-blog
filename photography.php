<?php
include_once './common/header.php';
?>
  <body>

	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<?php
                include_once './common/side.php';
                ?> <!-- END COLORLIB-ASIDE -->
		<div id="colorlib-main">
			<section class="ftco-section-2">
				<div class="photograhy">
					<div class="row no-gutters">
                                            <?php
                                                             $sql="select imgs,tag from page  ";
                                                             $infos= selectAll($sql, $link);
                                                             foreach ($infos as $value):
                                            ?>
						<div class="col-md-3">
							<a href="#" class="photography-entry img d-flex justify-content-center align-items-center" style="background-image: url(./MUI/images/blog-img/<?=$value["imgs"]?>);">
								<div class="overlay"></div>
								<div class="text text-center">
									
									<span><?=$value["tag"]?></span>
								</div>
							</a>
						</div>
					<?php
                                        endforeach;
                                        ?>
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