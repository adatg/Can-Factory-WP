<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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
		 
				<section class="content-area column  <?php if( get_field('display_sidebar') == true ){ ?>sidebar sidebar_second<?php } ?>">

					<div class="tabs"></div>
						
					<div class="region region-content">
						
						<div id="block-views-blog-info-block" class="block block-views blog-info">
							
							<div class="block-inner">
							
								<div class="content">
									
									<div class="view view-blog-info view-id-blog_info view-display-id-block view-dom-id-055c1c9a9dd2571b8993d4e0dda58d2b">
										
										<div class="view-content">
											
											<div class="views-row views-row-1 views-row-odd views-row-first views-row-last">
							  
												<div class="views-field views-field-title">        
													
													<h2 class="field-content"><?php the_title(); ?></h2>  
												
												</div>  
												
												<div class="views-field views-field-created">        
													
													<span class="field-content"><?php the_time('l F jS'); ?></span>
												
												</div>  
												
												<div class="views-field views-field-field-real-name">
													
													<div class="field-content">by <?php the_author_posts_link(); ?></div>
													
												</div>  
											
											</div>
										
										</div>
										
									</div>  
									
								</div>
						
							</div>

						</div>
						
						<div id="block-system-main" class="block block-system">
							
							<div class="block-inner">
							
								<div class="content">
										
									<div id="node-414" class="node node-blog  node-full clearfix" about="/blog/we-have-worldcupfever" typeof="sioc:Item foaf:Document">

										<div class="content-node clearfix">
						   
											<div class="easy_social_box clearfix horizontal easy_social_lang_und">
												
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
											
											<div class="field field-name-body field-type-text-with-summary field-label-hidden clearfix">
													
												<div class="field-items">
													
													<div class="field-item even" property="content:encoded">
														<?php
															 the_content(); 
														?>
													</div>
												
												</div>
											
											</div>
										
										</div>

									</div>
								
								</div>
							
							</div>

						</div>
						
						<div id="block-views-blog-gallery-block" class="block block-views gallery">
							
							<div class="block-inner">
							
								<div class="content">
									
									<div class="view view-blog-gallery view-id-blog_gallery view-display-id-block view-dom-id-e4fd30a96a1be3d7a227926b43dffa62">
										
										<div class="view-content">
											
											<div class="views-row views-row-1 views-row-odd views-row-first views-row-last">
							  
												<div class="views-field views-field-field-gallery-images">        
												
													<div class="field-content"></div>  
												
												</div>  
											
											</div>
										
										</div>
									</div>  
									
								</div>
						
							</div>

						</div>
						
						<div id="block-block-13" class="block block-block">
							
							<div class="block-inner">
							
								<div class="content">
									
									<div id="taboola-bottom-main-column" class=" trc_related_container trc_spotlight_widget"></div>

									<script type="text/javascript">

									window._taboola = window._taboola || [];

									_taboola.push({mode:'autosized-generated-1r', container:'taboola-bottom-main-column', placement:'bottom-main-column'});

									</script>
								
									<div id="taboola-bottom-main-column-below-disco-board" class=" trc_related_container trc_spotlight_widget"></div>

									<script type="text/javascript">

									window._taboola = window._taboola || [];

									_taboola.push({mode:'text-links-2-columns', container:'taboola-bottom-main-column-below-disco-board', placement:'bottom-main-column-below-disco-board', target_type:'text'});

									</script>  
									
								</div>
							
							</div>

						</div>
						
						<div id="block-views-post-bio-block" class="block block-views author-block">
							
							<div class="block-inner">
							
								<div class="content">
									
									<div class="view view-post-bio view-id-post_bio view-display-id-block view-dom-id-4329c350f88099a006bd5150f541e484">
										
										<div class="view-content">
											
											<div class="views-row views-row-1 views-row-odd views-row-first views-row-last">
							  
												<div class="views-field views-field-picture">        
													
													<div class="field-content">
														<?php the_author_image_size('', '', $author_id = null); ?>
													</div>  
													
												</div>  
												
												<div class="views-field views-field-field-real-name">        
													
													<div class="field-content"><?php the_author_posts_link(); ?></div>  
													
												</div>  
												
												<div class="views-field views-field-field-bio">        
													
													<div class="field-content">
														<?php echo get_the_author_meta('description'); ?>
													</div>  
												
												</div>  
												
												<?php if( get_the_author_meta('blog', $current_author->ID) != null ){ ?>
													<div class="views-field views-field-field-blog-link">
														
														<div class="field-content"><a href="<?php echo get_the_author_meta('blog', $current_author->ID); ?>">Blog</a></div>  
														
													</div>
												<?php } ?>
												
												<?php if( get_the_author_meta('twitter', $current_author->ID) != null ){ ?>
													<div class="views-field views-field-field-twitter-link">        
														
														<div class="field-content"><a href="http://www.twitter.com/<?php echo get_the_author_meta('twitter', $current_author->ID); ?>" target="_blank">@<?php echo get_the_author_meta('twitter', $current_author->ID); ?></a></div>  
														
													</div>
												<?php } ?>
											
											</div>
										
										</div>
									
									</div>  
								
								</div>
							
							</div>

						</div>  
						
					</div>
					
				</section> <!--content area-->

				<?php if( get_field('display_sidebar') == true ){ ?>
				
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
				
				<?php } ?>
				
			</div>

		
		</section><!--main content-->
		
		<section class="below-content">
			<div class="inner">   </div>
		</section>
		
	<?php endwhile; endif; ?>

<?php get_footer(); ?>