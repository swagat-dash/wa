<?php include 'top.php'?>

        
        
        
        	<!-- PAGE CONTENT
		============================================= -->	
		<div id="page" class="page">




			<!-- HEADER
			============================================= -->
			<header id="header" class="header tra-menu navbar-dark">
				<div class="header-wrapper">


					<!-- MOBILE HEADER -->
				    <div class="wsmobileheader clearfix">	  	
				    	<span class="smllogo"> <a href="<?php _e( get_url() )?>"><img src="<?php _e( get_option('website_black', get_url("inc/themes/backend/default/assets/img/logo-black.png")) )?>" alt=""></a></span>
				    	<a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>	
				 	</div>


				 	<!-- NAVIGATION MENU -->
				  	<div class="wsmainfull menu clearfix">
	    				<div class="wsmainwp clearfix">


	    					<!-- HEADER LOGO -->
	    					<!--<div class="desktoplogo"><a href="#hero-4" class="logo-black"><a href="<?php _e( get_url() )?>"><img src="<?php _e( get_option('website_black', get_url("inc/themes/backend/default/assets/img/logo-black.png")) )?>" alt=""></a></div>-->
	    						<div class="desktoplogo"><a href="#hero-4" class="logo-white"><a href="<?php _e( get_url() )?>"><img src="<?php _e( get_option('website_white', get_url("inc/themes/backend/default/assets/img/logo-white.png")) )?>" alt=""></a></div>
	    				


	    					<!-- MAIN MENU -->
	      					<nav class="wsmenu clearfix">
	        					<ul class="wsmenu-list nav-pink-hover dark-color">


	        						<!-- MEGAMENU -->
						          	  <li><a href="<?php _e( get_url() )?>#home"><?php _e("Home")?></a></li>
                <li class="mg_link"><a href="<?php _e( get_url() )?>#features"><?php _e("Features")?></a></li>
                <?php if(find_modules("payment")){ ?>
                <li class="<?php _e( (segment(1) == "pricing")?"current_page_item":"" )?>">
                    <a href="<?php _e( get_url("pricing") )?>"><?php _e("Pricing")?></a>
                </li>
                <?php }?>
                <?php if(find_modules("blog_manager")){ ?>
                <li class="<?php _e( (segment(1) == "blog")?"current_page_item":"" )?>">
                    <a href="<?php _e( get_url("blog") )?>"><?php _e("Blog")?></a>
                </li>
                <?php }?>
                <li><a href="<?php _e( get_url() )?>#faq"><?php _e("FAQs")?></a></li>
                <?php if(!_s("uid")){?>
                <li><a href="<?php _e( get_url("login") )?>"><?php _e("Login")?></a></li>
                <?php }?>
                <?php if(_s("language")){?>
                <li class="language-box cn-dropdown-item"><a href="#"><i class="<?php _e( get_data( json_decode(_s("language")) , 'icon') )?>"></i></a>
                  <ul class="dropdown">
                    <?php if(!empty(get_language_categories())){?>
                        <?php foreach (get_language_categories() as $key => $row): ?>
                        <li>
                          <a class="dropdown-item actionItem" href="<?php _e( get_url( THEME_FRONTEND."/set/".get_data($row, "ids") ) )?>" data-redirect=""><i class="<?php _e( get_data($row, "icon") )?>"></i> <?php _e( get_data($row, 'name') )?></a>
                        </li>
                        <?php endforeach ?>
                    <?php }?>
                  </ul>
                  <span class="dd-trigger"></span>
                </li>
                <?php }?>

							    

								    <!-- HEADER BUTTON -->
								    <li class="nl-simple" aria-haspopup="true">
								    	<!--<a href="#cta-10" class="btn btn-tra-white pink-hover last-link">Let's Started</a>-->
								    	 <?php if(!_s("uid")){?>
                                            <?php if( get_option("signup_status", 1) ){?>
                                            <div class="header-btn second-header-btn"><a class="btn btn-tra-white pink-hover last-link" href="<?php _e( get_url("signup") )?>"><?php _e("Get Started")?></a></div>
                                            <?php }?>
                                          <?php }else{?>
                                            <div class="header-btn second-header-btn"><a class="btn btn-tra-white pink-hover last-link" href="<?php _e( get_url("dashboard") )?>"><?php _e( sprintf( __("Hi, %s"), _u("fullname") ) )?></a></div>
                                          <?php }?>
								    </li> 


								

	        					</ul>
	        				</nav>	<!-- END MAIN MENU -->


	    				</div>
	    			</div>	<!-- END NAVIGATION MENU -->


				</div>     <!-- End header-wrapper -->
			</header>	<!-- END HEADER -->





<br><br><br><br>


                <!-- Breadcrumb Area-->
<section id="pricing-2" class="bg-whitesmoke wide-60 pricing-section division">
				<div class="container">

                    <!-- SECTION TITLE -->	
					<div class="row justify-content-center">	
						<div class="col-lg-10 col-xl-8">
							<div class="section-title title-01 mb-80">		

								<!-- Title -->	
								<h2 class="h2-md">Simple And Flexible Pricing</h2>	

								<!-- Text -->	
								<p class="p-xl">No credit card required. Change or cancel your plan anytime</p>
									
							</div>	
						</div>
					</div>

                        <!-- Price and Plans Area-->
                        
                            <?php 
                            $posts = get_ci_value("post_package");
                            $addons = get_ci_value("addon_package");
                            $packages = get_ci_value("packages");
                            $pricing_menu = get_ci_value("pricing_menu");
                            ?>
                        
                            <?php if(!empty($packages)){?>
                        
                            <!-- PRICING TABLES -->
                        					<div class="pricing-2-row pc-25">
                        						<div class="row row-cols-1 row-cols-md-3">
                                                <?php
                              foreach ($packages as $key => $row) {
                        
                                  $file_type = ["photo" => __("Photo"), "video" => __("Video")];
                                  $cloud_import = ["google_drive" => __("Google Drive"), "dropbox" => __("Dropbox"), "one_drive" => __("One Drive")];
                        
                                  if( !isset($row->permissions['file_manager_photo']) ) unset($file_type["photo"]);
                                  if( !isset($row->permissions['file_manager_video']) ) unset($file_type["video"]);
                        
                                  if( !isset($row->permissions['file_manager_google_drive']) ) unset($cloud_import["google_drive"]);
                                  if( !isset($row->permissions['file_manager_dropbox']) ) unset($cloud_import["dropbox"]);
                                  if( !isset($row->permissions['file_manager_onedrive']) ) unset($cloud_import["one_drive"]);
                        
                                  $check_file_type = false;
                                  if(!empty($file_type)){
                                      $check_file_type = true;
                                      $file_type = implode(", ", $file_type);
                                  }else{
                                      $file_type = __("Unsupported");
                                  }
                                  $check_cloud = false;
                                  if(!empty($cloud_import)){
                                      $check_cloud = true;
                                      $cloud_import = implode(", ", $cloud_import);
                                  }else{
                                      $cloud_import = __("Unsupported");
                                  }
                              ?>

							<!-- BASIC PLAN -->
							<div class="col">
								<div class="pricing-2-table bg-white mb-40 wow fadeInUp">	
													
									<!-- Plan Price -->
									<div class="pricing-plan">
									    
									    	<!-- Plan Title -->
										<div class="pricing-plan-title">
											<h5 class="h5-xs"><?php _e($row->name)?></h5>
											<?php if($row->popular==1){?>
                                            <h6 class="h6-sm bg-green white-color">Popular</h6>
                                            <?php }?>
											
										</div>	

										<!-- Price -->
										<!--<sup class="dark-color">$</sup>								-->
										<span class="dark-color"><?php _e( sprintf("%s%s", get_option("payment_symbol"), $row->price_annually) )?><span class="fw-4 fs-18"><?php _e("/month")?></span></span>
										<sup class="validity dark-color"></sup>
										<p class="p-md"><?php _e($row->description)?></p>
                                        
									</div>
									<hr>
									<div class="">
                                          <?php
                                          $social_networks_allowed = 0;
                                          if(!empty($posts)){
                                              foreach ($posts as $value){
                                                  if( isset($row->permissions[ $value['id']."_enable" ]) ){
                                                      $social_networks_allowed++;
                                                  }
                                              } 
                                          }
                            
                                          if( isset($row->permissions[ "whatsapp_enable" ]) ){
                                            $social_networks_allowed++;
                                          }
                                          ?>
                            
                                          <div class="plan-group">
                                            <h5><?php _e( sprintf( sprintf(__("Add up to %s Whatsapp Accounts"),  __( $social_networks_allowed * $row->number_accounts ) ) ) )?></h5>
                                          <p><?php _e( sprintf( sprintf(__("%s social account on each platform"),  __( $row->number_accounts ) ) ) )?> </p>
                                          </div>
                                          <hr><br>
                                      </div>
                                      <div class="">
                                        <?php if(!empty($posts)){?>
                                          <h4><?php _e("Scheduling & Report")?></h4>
                                          <?php foreach ($posts as $value): ?>
                                              <p>
                                                <i class="<?php _e( isset($row->permissions[ $value['id']."_enable" ]) ? "lni-check-mark-circle":"lni-close" )?>"></i>
                                                <span><?php _e( sprintf( sprintf(__("%s scheduling & report"),  __( $value['group'] ) ) ) )?></span>
                                              </p>
                                          <?php endforeach ?>
                                        <?php }?>
                            
                                        <?php if(!empty($pricing_menu)){?>
                                          <?php foreach ($pricing_menu as $pm): ?>
                            
                                            <?php if( isset($row->permissions[ $pm['main_permission'] ]) && $row->permissions[ $pm['main_permission'] ]){?>
                                              <h4><?php _e($pm['title'])?></h4>
                                              <?php if( isset($pm['sub_menu']) ){?>
                            
                                                <?php foreach ($pm['sub_menu'] as $pm_sub): ?>
                                                    
                                                    <?php if(is_array($pm_sub)){ 
                                                      $pm_permission = isset($row->permissions[ $pm_sub['permission'] ])?$row->permissions[ $pm_sub['permission'] ]:0;
                                                    ?>
                                                      <p>
                                                        <?php if( $pm_permission || (isset($pm_sub['check']) && $pm_sub['check']) ){?>
                                                          <i class="lni-check-mark-circle"></i>
                                                        <?php }else{?>
                                                          <i class="lni-close"></i>
                                                        <?php }?>
                            
                                                        <?php if(is_string( $pm_sub['text'] )){?>
                                                        <p><?php _e( sprintf($pm_sub['text'], $pm_permission ) )?></p>
                                                        <?php }else{?>
                                                        <span><?php _e( $pm_permission?sprintf($pm_sub['text'][1], $pm_permission ):$pm_sub['text'][0], false)?></span>
                                                        <?php }?>
                            
                                                      </p>
                                                    <?php }?>
                            
                                                <?php endforeach ?>
                                                
                                              <?php }?>
                            
                                            <?php }?>
                                          
                                          <?php endforeach ?>
                            
                                        <?php }?>
                            
                                        <?php if(!empty($addons)){?>
                                          <p><h6><?php _e("Modules & Addons")?></h6></p>
                            
                                          <?php foreach ($addons as $value): ?>
                                              <p>
                                                <i class="<?php _e( isset($row->permissions[ $value['id']."_enable" ]) ? "lni-check-mark-circle":"lni-close" )?>"></i>
                                                <span><?php _e( $value['sub_name'] )?></span>
                                              </p>
                                          <?php endforeach ?>
                                        <?php }?>
                                        <hr><br>
                                       <h4><?php _e("Advance features")?></h4>
                            
                                        <p class="have">
                                          <i class="lni-check-mark-circle"></i>
                                          <span><?php _e("Spintax support")?></span>
                                        </p>
                                        <p>
                                          <i class="<?php _e( isset($row->permissions[ "file_manager_image_editor" ]) ? "lni-check-mark-circle":"lni-close" )?>"></i>
                                          <span><?php _e("Watermark support")?></span>
                                        </p>
                                        <p>
                                          <i class="<?php _e( isset($row->permissions[ "file_manager_image_editor" ]) ? "lni-check-mark-circle":"lni-close" )?>"></i>
                                          <span><?php _e("Image Editor support")?></span>
                                        </p>
                                          
                                        <p>
                                          <?php if($check_cloud){ ?>
                                            <i class="lni-check-mark-circle"></i>
                                          <?php }else{?>
                                            <i class="lni-close"></i>
                                          <?php }?>
                                          
                                          <span><?php _e( sprintf( __( "Cloud import: %s"), $cloud_import ) )?></span>
                                        </p>
                                        <p class="have">
                                          <?php if($check_file_type){ ?>
                                            <i class="lni-check-mark-circle"></i>
                                          <?php }else{?>
                                            <i class="lni-close"></i>
                                          <?php }?>
                                          <span><?php _e( sprintf( __( "File type: %s"), $file_type ) )?></span>
                                        </p>
                                        <p class="have">
                                          <i class="lni-check-mark-circle"></i>
                                          <span><?php _e( sprintf( __( "Storage: %sMB"), $row->permissions['max_storage_size'] ) )?></span>
                                        </p>
                                        <p class="have">
                                          <i class="lni-check-mark-circle"></i>
                                          <span><?php _e( sprintf( __( "Max. file size: %sMB"), $row->permissions['max_file_size'] ) )?></span>
                                        </p>
                                      </div>

								
                                <a class="btn btn-sm btn-tra-grey tra-green-hover" href="<?php _e( get_url("payment/index/".$row->ids."/1" ))?>" data-tmp="<?php _e( get_url("payment/index/".$row->ids."/2" ))?>"><?php _e("Choose Plan & Checkout")?></a>
								</div>
							</div>
							
							 <?php }?>
				</div>
							  <?php }?>
							  </section>
							
							  
							<!-- END BASIC PLAN -->
      <!-- Single Price Plan Area-->
      
      
 
<?php include 'footer.php'?>
<?php include 'bottom.php'?>