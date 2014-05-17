<!--NEWS FEATURE-->

<div id="university">
	<h3 id="university-title"  class="header-holder"> 
		<a href="<?php echo get_bloginfo("url");?>/section/university">University</a>
	</h3>
	<div class="row">
		<?php
			$args = array( 'posts_per_page' => 1, 'offset'=> 0, 'category' => 2, 'tag_id' => 12 );
			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post ); 
		?>
		<div id="univ-main" class="col-xs-6">
			<div class="row">
				<div id="univ-main-photo" class="photo-large photo-holder col-xs-12">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('img.attachment-full'); ?></a>
				</div>
			</div>
			<div class="row">
				<h4 id="univ-main-title" class="title-holder">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h4>
			</div>
			<div class="row">
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
			$args = array( 'posts_per_page' => 1, 'offset'=> 1, 'category' => 2, 'tag_id' => 12 );
			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post ); 
		?>
		<div id="univ-main-mini" class="col-xs-3">
			<div class="row">
				<div id="univ-main-mini-photo" class="photo-small photo-holder col-xs-12">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('img.attachment-full'); ?></a>
				</div>
			</div>
			<div class="row">
				<h4 id"univ-main-mini-title" class="title-holder">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h4>
			</div>
			<div class="row">
				<p class="excerpt-holder">
					<?php echo get_the_excerpt($post->ID, true); ?>
				</p>
			</div>
		</div>
		<?php 
			endforeach; 
			wp_reset_postdata();
		?>
		<div id="univ-stories" class="col-xs-3">
			<?php
				$args = array( 'posts_per_page' => 5, 'offset'=> 2, 'category' => 2, 'tag_id' => 12 );
				$myposts = get_posts( $args );
				foreach ( $myposts as $post ) : setup_postdata( $post ); 
			?>
			<div class="row">
				<h5 id="<?php 
							if($post === reset($myposts)){
								echo 'univ-stories-title-first';
							}
							elseif($post === end($myposts)){
								echo 'univ-stories-title-last';
							}
							else{
								echo 'univ-stories-title';
							}
						?>" class="title-holder"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
			</div>
			<?php 
				endforeach; 
				wp_reset_postdata();
			?>
		</div>
	</div>
</div>