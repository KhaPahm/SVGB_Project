<div class="row post-list">
	<div class="col-md-2 col-sm-3 col-5">
		<div class="thumbnail">
			<?php if (has_post_thumbnail())
			 $imageUrl =  wp_get_attachment_image_src(get_post_thumbnail_id(),'full');?>
			<img alt="Post Thumbnail" width="100%" height="150" src="<?php echo esc_url($imageUrl[0]); ?>">
		</div>
	</div>
	<div class="col-md-10 col-sm-9 col-7">
			<h3><a href="<?php the_permalink(); ?>" title="<?php the_title();  ?>" style="text-decoration: none; color: black;"><?php the_title();  ?></a></h3>
			<p class="post-content">
				<?php the_excerpt(); ?>
			</p>
	</div>
</div>