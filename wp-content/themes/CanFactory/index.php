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
																	<a href="<?php the_permalink(); ?>" class="twitter-share-button" data-via="twitterapi" data-lang="en">Tweet</a>
																	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
																</div>
																
																<div class="easy_social-widget easy_social-widget-facebook">
																	<iframe src="//www.facebook.com/plugins/like.php?locale=en_US&amp;href=<?php the_permalink(); ?>&amp;send=false&amp;layout=button_count&amp;width=88&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font=&amp;height=21&amp;appId=" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:88px; height:21px;" allowtransparency="true"></iframe>
																</div>
																
																<div class="easy_social-widget easy_social-widget-googleplus">
																	<!-- Place this tag where you want the +1 button to render. -->
																	<div class="g-plusone" data-href="<?php the_permalink(); ?>" data-size="medium"></div>

																	<!-- Place this tag after the last +1 button tag. -->
																	<script type="text/javascript">
																	  (function() {
																		var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
																		po.src = 'https://apis.google.com/js/platform.js';
																		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
																	  })();
																	</script>
																</div>
																
																<div class="easy_social-widget easy_social-widget-linkedin last">
																	<script src="//platform.linkedin.com/in.js" type="text/javascript">
																	  lang: en_US
																	</script>
																	<script type="IN/Share" data-url="<?php the_permalink(); ?>" data-counter="right"></script>
																</div>
															
															</div> <!-- /.easy_social_box -->
														
														</span>  
													
													</div>  
													
													<div class="views-field views-field-body">        
														
														<div class="field-content"><p><?php the_excerpt(); ?></p></div>  
														
													</div>  
													
													<div class="views-field views-field-view-node">        
														<span class="field-content"><a href="<?php the_permalink(); ?>">Read More &raquo;</a></span>  
													</div>
												</li>
										
												<?php endwhile; endif; ?>
											
											</ul>
										
										</div>  
										
									</div>
  
									<div class="item-list">
										
										<ul class="pager">
											
											<li class="pager-previous first"><?php previous_posts_link('‹ previous'); ?></li>
											<li class="pager-current"><?php echo max( 1, get_query_var('paged') ).' of '.$wp_query->max_num_pages; ?></li>
											<li class="pager-next last"><?php next_posts_link('next ›'); ?></li>
										
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
										
										<?php
											
											$args = array(
												'post_type' => 'post',
												'posts_per_page' => 3,
												'orderby'    => 'date',
												'order'    => 'DESC'
											);
											query_posts( $args );
											$i = 1;
											if (have_posts()) : while (have_posts()) : the_post();
										?>
										
											<div class="views-row views-row-<?php echo $i; ?> views-row-odd views-row-first">
		  
												<div class="views-field views-field-title">        
													<span class="field-content"><a href="/blog/we-have-worldcupfever"><?php the_title(); ?></a></span>  
												</div>  
												
												<div class="views-field views-field-created">        
													<span class="field-content"><?php the_time('l F jS'); ?></span>  
												</div>  
												
												<div class="views-field views-field-field-real-name">        
													<div class="field-content">by <?php the_author_posts_link(); ?></div>
												</div>  
												
											</div>
										
										<?php $i++; endwhile; wp_reset_query(); endif; ?>
									
									</div>     
									
									<div class="more-link">
										<a href="<?php bloginfo('url'); ?>">More blog  posts &raquo;  </a>
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
