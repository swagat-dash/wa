<?php include "top.php"?>
<?php include "header.php"?>
<!-- BLOG POSTS LISTING
			============================================= -->
			<section id="blog-page" class="bg-snow wide-50 inner-page-hero blog-page-section division">
				<div class="container">


					<!-- SECTION TITLE -->	
					<div class="row justify-content-center">	
						<div class="col-md-10 col-lg-8">
							<div class="section-title title-02 mb-85">	
								<h3 class="h3-xl">Relevant news and more for you. Welcome to our blog</h3>
							</div>	
						</div>
					</div>

 <?php if(!empty($blogs)){?>

                            <?php foreach ($blogs as $key => $blog): ?>
					<!-- FEATURED POST -->
					<div class="rel blog-post-wide featured-post">
	 					<div class="row d-flex align-items-center">
                           
	 						<!-- Featured Badge -->
	 						<div class="featured-badge ico-25 bg-whitesmoke yellow-color">
	 							<span class="flaticon-star-1"></span>
	 						</div>
																		
							<!-- BLOG POST IMAGE -->
				 			<div class="col-lg-7 blog-post-img">
								<img class="img-fluid" src="<?php _e($blog->image)?>" alt="blog-post-image" />	
							</div>

							<!-- BLOG POST TEXT -->
							<div class="col-lg-5 blog-post-txt">

								<!-- Post Link -->
								<h5 class="h5-xl">
									<a href="<?php _e( get_url("blog/".$blog->slug) )?>"><?php _e( cut_text($blog->name, 80) )?></a>
								</h5>

								<!-- Text -->
								<!--<p class="p-lg">Aliqum mullam blandit vitae tempor sapien and donec lipsum gravida and porta -->
								<!--   undo velna dolor in cubilia...-->
								<!--</p>-->

								<!-- Post Meta -->
								<div class="post-meta"><p>Wosto Infotech &ensp;|&ensp; <?php _e( date_show($blog->changed) )?></p></div>	

							</div>	<!-- END BLOG POST TEXT -->
                           
						</div>   <!-- End row -->
				 	</div>	<!-- END FEATURED POST -->

 <?php endforeach ?>

                             <?php }?>
					<!-- POSTS WRAPPER -->


				</div>     <!-- End container -->
			</section>	<!-- END BLOG POSTS LISTING -->
			
			

<?php include "footer.php"?>
<?php include "bottom.php"?>