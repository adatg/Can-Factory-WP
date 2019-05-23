<?php get_header(); ?>
    
    <?php 
        $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
    ?>

    <div class="top_pic" <?php if( $feat_image != null ){ echo 'style="background-image: url('.$feat_image.');"'; } ?>>
        <div class="on_pic_cont">
            <h2 class="on_pic"><?php the_title() ;?></h2>
        </div>
    </div>
    <div class="full_frame">
        <div class="in_1200">
            <?php the_content() ;?>
        </div>
    </div><!--footer-->

<?php get_footer(); ?>