<?php get_header(); ?>
	
    <section class="main-banner">
		
		<div class="inner"></div>      

    </section>

    <section id="main-content">
         
		 <div class="title-area"> 
			
			<div class="inner">
           
				<h2>Taboola's Blog</h2>
				
			</div>
		
		</div>
      
		<div class="inner">
     
			<section class="content-area column  sidebar sidebar_second">

                <div class="tabs"></div>
                    
				<div class="region region-content">
					
					<div id="block-system-main" class="block block-system">
						
						<div class="block-inner">

							<div class="content">
									
								<div class="view view-blog view-id-blog view-display-id-page view-dom-id-ee11efdfee55f70504f0b9ec440c29aa">
									
									<div class="view-content">
										
										<div class="item-list">    
											
											<ul>          
												
												<?php 

													$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
													
													$args = array(
														'post_type' => 'post',
														'paged' => $paged,
														'author' => get_the_author_meta('ID'),
														'posts_per_page' => 10,
														'order'    => 'DESC'
													);
													query_posts( $args );
													if (have_posts()) : while (have_posts()) : the_post();
												?>
												
												<li class="views-row views-row-1 views-row-odd views-row-first">
													
													<?php 
														if (has_post_thumbnail( $post->ID ) ): 
															$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ));
													?>
													
														<div class="views-field views-field-field-content-image">        
															
															<div class="field-content">
																
																<a href="<?php the_permalink(); ?>">
																	<?php the_post_thumbnail( array(206,500), 'thumbnail' ); ?> 
																</a>
															
															</div>  
															
														</div>

													<?php endif; ?>
													
													<div class="views-field views-field-title">        
														
														<span class="field-content"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>  
													
													</div>  
													
													<div class="views-field views-field-created">        
														<span class="field-content"><?php the_time('l F jS'); ?></span>
													</div>  
													
													<div class="views-field views-field-field-real-name">        
														<div class="field-content">by <?php the_author_posts_link(); ?></div>  
													</div>  
													
													<div class="views-field views-field-easy-social">
														
														<span class="field-content">
															
															<div class="easy_social_box clearfix horizontal easy_social_lang_">
																
																<div class="easy_social-widget easy_social-widget-twitter first">
																	<iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" src="http://platform.twitter.com/widgets/tweet_button.1403226798.html#_=1404227958961&amp;count=horizontal&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=http%3A%2F%2Fwww.taboola.com%2Fblog&amp;related=%3ACheck%20it%20out!&amp;size=m&amp;text=We%20have%20%23WorldCupFever!&amp;url=http%3A%2F%2Fwww.taboola.com%2Fblog%2Fwe-have-worldcupfever" class="twitter-share-button twitter-tweet-button twitter-share-button twitter-count-horizontal" title="Twitter Tweet Button" data-twttr-rendered="true" style="width: 110px; height: 20px;"></iframe>
																</div>
																
																<div class="easy_social-widget easy_social-widget-facebook">
																	<iframe src="//www.facebook.com/plugins/like.php?locale=en_US&amp;href=http%3A//www.taboola.com/blog/we-have-worldcupfever&amp;send=false&amp;layout=button_count&amp;width=88&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font=&amp;height=21&amp;appId=" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:88px; height:21px;" allowtransparency="true"></iframe>
																</div>
																
																<div class="easy_social-widget easy_social-widget-googleplus">
																	<div id="___plusone_0" style="text-indent: 0px; margin: 0px; padding: 0px; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 90px; height: 20px; background: transparent;"><iframe frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 90px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 20px;" tabindex="0" vspace="0" width="100%" id="I0_1404227958984" name="I0_1404227958984" src="https://apis.google.com/u/0/_/+1/fastbutton?usegapi=1&amp;size=medium&amp;annotation=bubble&amp;origin=http%3A%2F%2Fwww.taboola.com&amp;url=http%3A%2F%2Fwww.taboola.com%2Fblog%2Fwe-have-worldcupfever&amp;gsrc=3p&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.VXUpfikRKZo.O%2Fm%3D__features__%2Fam%3DAQ%2Frt%3Dj%2Fd%3D1%2Ft%3Dzcms%2Frs%3DAItRSTOh049Pi6fXQ7xvZQYcwfcT2RsU5Q#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&amp;id=I0_1404227958984&amp;parent=http%3A%2F%2Fwww.taboola.com&amp;pfname=&amp;rpctoken=27307401" data-gapiattached="true" title="+1"></iframe></div>
																</div>
																
																<div class="easy_social-widget easy_social-widget-linkedin last">
																	<span class="IN-widget" style="line-height: 1; vertical-align: baseline; display: inline-block; text-align: center;"><span style="padding: 0px !important; margin: 0px !important; text-indent: 0px !important; display: inline-block !important; vertical-align: baseline !important; font-size: 1px !important;"><span id="li_ui_li_gen_1404227956463_0"><a id="li_ui_li_gen_1404227956463_0-link" href="javascript:void(0);"><span id="li_ui_li_gen_1404227956463_0-logo">in</span><span id="li_ui_li_gen_1404227956463_0-title"><span id="li_ui_li_gen_1404227956463_0-mark"></span><span id="li_ui_li_gen_1404227956463_0-title-text">Share</span></span></a></span></span><span style="padding: 0px !important; margin: 0px !important; text-indent: 0px !important; display: inline-block !important; vertical-align: baseline !important; font-size: 1px !important;"><span id="li_ui_li_gen_1404227956471_1-container" class="IN-right"><span id="li_ui_li_gen_1404227956471_1" class="IN-right"><span id="li_ui_li_gen_1404227956471_1-inner" class="IN-right"><span id="li_ui_li_gen_1404227956471_1-content" class="IN-right">13</span></span></span></span></span></span><script type="in/share+init" data-url="http://www.taboola.com/blog/we-have-worldcupfever" data-counter="right"></script>
																</div>
															
															</div> <!-- /.easy_social_box -->
														
														</span>  
													
													</div>  
													
													<div class="views-field views-field-body">        
														
														<div class="field-content"><p><?php the_excerpt(); ?></p></div>  
														
													</div>  
													
													<div class="views-field views-field-view-node">        
														<span class="field-content"><a href="<?php the_permalink(); ?>">Read More »</a></span>  
													</div>
												</li>
										
												<?php endwhile; taboola_pagination(); endif; ?>
											
											</ul>
										
										</div>  
										
									</div>
  
									<div class="item-list">
										
										<ul class="pager">
											
											<li class="pager-previous first">&nbsp;</li>
											<li class="pager-current">1 of 6</li>
											<li class="pager-next last"><a title="Go to next page" href="/blog?page=1">next ›</a></li>
										
										</ul>
										
									</div>  
								
								</div>  
							
							</div>
						
						</div>
					
					</div>  
				
				</div>
			
			</section> <!--content area-->

            
			
			<aside id="sidebar-second" class="column sidebar">
				
				<div class="region region-sidebar-second">
						
					<div id="block-views-blog-block" class="block block-views">
						
						<div class="block-inner">
							
							<div class="block-title"> 
								<h2><span>Popular Blog Posts</span></h2>
							</div>
  
							<div class="content">
								
								<div class="view view-blog view-id-blog view-display-id-block view-dom-id-0c9a766a569e60de2effb148911490c4">
		
									<div class="view-content">
										
										<div class="views-row views-row-1 views-row-odd views-row-first">
	  
											<div class="views-field views-field-title">        
												<span class="field-content"><a href="/blog/we-have-worldcupfever">We have #WorldCupFever!</a></span>  
											</div>  
											
											<div class="views-field views-field-created">        
												<span class="field-content">Saturday June 28th</span>  
											</div>  
											
											<div class="views-field views-field-field-real-name">        
												<div class="field-content">by <a href="/blog/Tammy%20Blythe%20Goodman">Tammy Blythe Goodman</a></div>  
											</div>  
											
										</div>
										
										<div class="views-row views-row-2 views-row-even">
											
											<div class="views-field views-field-title">        
												<span class="field-content"><a href="/blog/update-taboola-security-breach-identified-and-fully-resolved-0">Update: Taboola Security Breach - Identified and Fully Resolved </a></span>  
											</div>  
											
											<div class="views-field views-field-created">        
												<span class="field-content">Monday June 23rd</span>  
											</div>  
											
											<div class="views-field views-field-field-real-name">        
												<div class="field-content">by <a href="/blog/Adam%20Singolda">Adam Singolda</a></div>  
											</div>  
											
										</div>
										
										<div class="views-row views-row-3 views-row-odd views-row-last">
	  
											<div class="views-field views-field-title">        
												<span class="field-content"><a href="/blog/match-game-which-type-online-video-should-your-business-create">The Match Game: Which Type of Online Video Should Your Business Create?</a></span>  
											</div>  
											
											<div class="views-field views-field-created">        
												<span class="field-content">Thursday June 12th</span>  
											</div>  
											
											<div class="views-field views-field-field-real-name">        
												<div class="field-content">by <a href="/blog/Tammy%20Blythe%20Goodman">Tammy Blythe Goodman</a></div>  
											</div>  
											
										</div>
									
									</div>     
									
									<div class="more-link">
										<a href="/blog">More blog  posts »  </a>
									</div>
	  
								</div>  
							
							</div>
						
						</div>

					</div>
					
					<div id="block-menu-menu-social-links" class="block block-menu social-links">
							
						<div class="block-inner">

							<div class="content">
								
								<ul class="menu clearfix">
									<?php if( ot_get_option('li_link') != null ){ ?>
									<li class="first leaf">
										<a href="http://www.linkedin.com/company/taboola" class="linkedin-button" target="_blank">Follow us on Linkedin</a>
									</li>
									<?php } ?>
									<?php if( ot_get_option('tw_link') != null ){ ?>
									<li class="leaf">
										<a href="http://www.twitter.com/taboola" class="twitter-button" target="_blank">Follow us on Twitter</a>
									</li>
									<?php } ?>
									<?php if( ot_get_option('fb_link') != null ){ ?>
									<li class="last leaf">
										<a href="http://www.facebook.com/pages/Taboola/283895801355" class="facebook-button" target="_blank">Like us on Facebook</a>
									</li>
									<?php } ?>
								</ul>  
							
							</div>
						
						</div>

					</div>  
				
				</div>
		
			</aside>
			
		</div>

	
	</section><!--main content-->
	
	<section class="below-content">
		<div class="inner">   </div>
	</section>

<?php get_footer(); ?>
