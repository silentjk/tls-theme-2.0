<div id="natsit">
	<h4 id="natsit-header" class="header-holder"> 
		<a href="<?php echo get_bloginfo("url");?>/kicker/national-situationer">National Situationer</a>
	</h4>
	<div class="row">
		<div id="natsit-left" class="col-xs-6">
			<?php
				$args = array( 'posts_per_page' => 1, 'offset'=> 0, 'category' => 4, 'tag_id' => 451 );
				$myposts = get_posts( $args );
				foreach ( $myposts as $post ) : setup_postdata( $post ); 
			?>
			<div class="row">
				<h4 id="natsit-title" class="title-holder"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
			</div>
			<div class="row">
				<div class="photo-small photo-holder col-xs-6">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('img.attachment-full'); ?></a>
				</div>
				<div id="natsit-excerpt" class="col-xs-6">
					<p class="excerpt-holder"><?php echo get_the_excerpt($post->ID, true); ?></p>
				</div>
			</div>
			<?php 
				endforeach; 
				wp_reset_postdata();
			?>
		</div>
		<div id="natsit-right" class="col-xs-6">
			<?php
				$args = array( 'posts_per_page' => 1, 'offset'=> 1, 'category' => 4, 'tag_id' => 451 );
				$myposts = get_posts( $args );
				foreach ( $myposts as $post ) : setup_postdata( $post ); 
			?>
			<div class="row">
				<h4 id="natsit-title" class="title-holder"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
			</div>
			<div class="row">
				<div class="photo-small photo-holder col-xs-6">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('img.attachment-full'); ?></a>
				</div>
				<div id="natsit-excerpt" class="col-xs-6">
					<p class="excerpt-holder"><?php echo get_the_excerpt($post->ID, true); ?></p>
				</div>
			</div>
			<?php 
				endforeach; 
				wp_reset_postdata();
			?>
		</div>
	</div>
</div>