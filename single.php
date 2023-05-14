<?php get_header(); ?>
<!-- Body -->
<section>
    <div id="body-container">
        <hr style="width: 100%; margin-top: 2%;">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title();?></h2>
        <div class="post-infor">
            <p><?php the_date()?></p>
        </div>
        <div class="thumnail-container">
            <?php $imageUrl =  wp_get_attachment_image_src(get_post_thumbnail_id(),'full');?>
			<img id = "thumbnail-post" alt="Post Thumbnail" src="<?php echo esc_url($imageUrl[0]); ?>">
        </div>
        <div class="post-container">
            <?php the_content(); ?>
        </div>
        <?php endwhile; ?>
        <?php 
            else :
                get_template_part( 'content', 'none' );
            endif;
        ?>
    </div>
</section>

<?php get_footer(); ?>