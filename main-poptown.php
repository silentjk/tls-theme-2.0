<div id="poptown" class="others-right col-xs-6">
	<div class="row">
		<h3 id="poptown-header" class="header-holder"> 
			<a href="<?php echo get_bloginfo("url");?>/section/sports">Poptown</a>
		</h3>
	</div>
	<?php
		$args = array( 'posts_per_page' => 3, 'offset'=> 0, 'category' => 10 );
		$myposts = get_posts( $args );
		foreach ( $myposts as $post ) : setup_postdata( $post ); 
		if($post === reset($myposts)){?>
			<div class="row">
				<div id="poptown-photo" class="photo-large photo-holder col-xs-12">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('img.attachment-full'); ?></a>
				</div>
			</div>
			<div class="row">
				<h4 id="poptown-title" class="title-holder"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
			</div>
			<div class="row">
				<p class="excerpt-holder"><?php echo get_the_excerpt($post->ID, true); ?></p>
			</div>
			<?php
			}
			else{?>
			<div class="row">
				<h5 id="other-title" class="title-holder"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
			</div>
			<?php 
			}
		endforeach; 
		wp_reset_postdata();
	?>
</div>