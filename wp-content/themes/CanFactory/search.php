<?php get_header();

global $query_string;

$s=get_search_query();
$args = array(
	's' =>$s
); ?>
 
   <?php $the_query = new WP_Query( $args );
				if ( $the_query->have_posts() ) { ?>
   
    <div class="top_pic" <?php if( $feat_image != null ){ echo 'style="background-image: url('.$feat_image.');"'; } ?>>
        <div class="on_pic_cont">
            <h2 class="on_pic"><?php _e("Search Results for: ".get_query_var('s')); ?></h2>
        </div>
    </div>
    
    <div class="full_frame">
        <div class="in_1200 content">
            <?php
						while ( $the_query->have_posts() ) {
						   $the_query->the_post();
								 ?>
									<div class="product-category">
										<div class="product-category-inner">
											<div class="product-category-body">
												<h5>
													<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
												</h5>
											</div><!-- /.product-category-body -->
										</div><!-- /.product-category-inner -->
									</div><!-- /.product-category -->
								 <?php
						}
					}else{ ?>
						<h2>Nothing Found</h2>
						<div class="alert alert-info">
						  <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
						</div>
				<?php } ?>
        </div>
    </div><!--footer-->
<?php get_footer(); ?>