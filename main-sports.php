<!--SPORTS FEATURE-->

<div id="sports" class="col-xs-6">
	<?php
		$args = array( 'posts_per_page' => 1, 'offset'=> 0, 'category' => 6, 'tag_id' => 470 );
		$myposts = get_posts( $args );
		foreach ( $myposts as $post ) : setup_postdata( $post ); 
	?>
	<h3 id="sports-header" class="header-holder"> 
		<a href="<?php echo get_bloginfo("url");?>/section/sports">Sports</a>
	</h3>
	<div class="row">
		<h4 class="title-holder">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h4>
	</div>
	<div class="row">
		<div id="sports-photo" class="photo-small photo-holder col-xs-6">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('img.attachment-full'); ?></a>
		</div>
		<div id="sports-excerpt" class="col-xs-6">
			<p class="excerpt-holder">
				<?php echo get_the_excerpt($post->ID, true); ?>
			</p>
		</div>
	</div>
	<?php 
		endforeach; 
		wp_reset_postdata();
	?>
	<?php
		$args = array( 'posts_per_page' => 3, 'offset'=> 1, 'category' => 6, 'tag_id' => 470 );
		$myposts = get_posts( $args );
		foreach ( $myposts as $post ) : setup_postdata( $post ); 
	?>
	<div class="row">
		<h5 id="sports-title" class="title-holder"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
	</div>
	<?php 
		endforeach; 
		wp_reset_postdata();
	?>
</div>