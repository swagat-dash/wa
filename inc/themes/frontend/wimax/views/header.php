
        
        
        
        	<!-- PAGE CONTENT
		============================================= -->	
		<div id="page" class="page">




			<!-- HEADER
			============================================= -->
			<header id="header" class="header tra-menu navbar-light">
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
	        					<ul class="wsmenu-list nav-pink-hover">


	        						<!-- MEGAMENU -->
						          	  <li><a href="<?php _e( get_url() )?>#hero-3"><?php _e("Home")?></a></li>
               
                <?php if(find_modules("payment")){ ?>
                <li class="<?php _e( (segment(1) == "pricing")?"current_page_item":"" )?>">
                    <a href="<?php _e( get_url("#pricing-2") )?>"><?php _e("Pricing")?></a>
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
                                            <div class="header-btn second-header-btn"><a class="btn btn-tra-white pink-hover last-link" href="<?php _e( get_url("signup") )?>"><?php _e("Register Now")?></a></div>
                                            <?php }?>
                                          <?php }else{?>
                                            <div class="header-btn second-header-btn"><a class="btn btn-tra-white pink-hover last-link" href="<?php _e( get_url("dashboard") )?>"><?php _e( sprintf( __("Hi, %s"), _u("fullname") ) )?></a></div>
                                          <?php }?>
								    </li> 


									<!-- HEADER SOCIAL LINKS 													
									<li class="nl-simple white-color header-socials ico-20 clearfix" aria-haspopup="true">
										<span><a href="#" class="ico-facebook"><span class="flaticon-facebook"></span></a></span>
										<span><a href="#" class="ico-twitter"><span class="flaticon-twitter"></span></a></span>
										<span><a href="#" class="ico-instagram"><span class="flaticon-instagram"></span></a></span>
										<span><a href="#" class="ico-dribbble"><span class="flaticon-dribbble"></span></a></span>	
									</li> -->	


	        					</ul>
	        				</nav>	<!-- END MAIN MENU -->


	    				</div>
	    			</div>	<!-- END NAVIGATION MENU -->


				</div>     <!-- End header-wrapper -->
			</header>	<!-- END HEADER -->


