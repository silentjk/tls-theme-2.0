<div id="editorial">
	<h3 id="editorial-header" class="header-holder"> 
		<a href="<?php echo get_bloginfo("url");?>/kicker/editorial">Editorial</a>
	</h3>
	<div id="editorial-main" class="col-xs-12">
		<div class="row">
			<?php
				$args = array( 'posts_per_page' => 1, 'offset'=> 0, 'category' => 5, 'tag_id' => 471 );
				$myposts = get_posts( $args );
				foreach ( $myposts as $post ) : setup_postdata( $post ); 
			?>
			<div id="editorial-photo" class="photo-large photo-holder col-xs-6">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('img.attachment-full'); ?></a>
			</div>
			<?php 
				endforeach; 
				wp_reset_postdata();
			?>
			<div id="editorial-info" class="col-xs-6">
				<?php
					$args = array( 'posts_per_page' => 4, 'offset'=> 0, 'category' => 5, 'tag_id' => 471 );
					$myposts = get_posts( $args );
					foreach ( $myposts as $post ) : setup_postdata( $post ); 
					if($post === reset($myposts)){?>
						<div class="row">
							<h4 id="editorial-title" class="title-holder"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						</div>
						<div class="row">
							<p id="editorial-excerpt" class="excerpt-holder"><?php echo get_the_excerpt($post->ID, true); ?></p>
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
				<!--
				<div class="row">
					<h5 id="other-title" class="title-holder">Death of a salesman?</h5>
				</div>
				<div class="row">
					<h5 id="other-title" class="title-holder">Lost in translation</h5>
				</div>-->
			</div>
		</div>
	</div>
</div>