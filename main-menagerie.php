<h3 id="" class="header-holder"> 
	<a href="<?php echo get_bloginfo("url");?>/section/menagerie">Menagerie</a>
</h3>
<div id="menage" class="col-xs-3">
	<div class="row">
		<h4 id="menage-1-header" class="header-holder"> 
			<a href="<?php echo get_bloginfo("url");?>/kicker/green-pulse">Green Pulse</a>
		</h4>
	</div>
	<?php
		$args = array( 'posts_per_page' => 1, 'offset'=> 0, 'category' => 8, 'tag_id' => 457 );
		$myposts = get_posts( $args );
		foreach ( $myposts as $post ) : setup_postdata( $post ); 
	?>
	<div class="row">
		<div id="menage-1-photo" class="photo-small photo-holder col-xs-6">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('img.attachment-full'); ?></a>
		</div>
	</div>
	<div class="row">
		<h5 id="menage-title" class="title-holder"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
	</div>
	<?php 
		endforeach; 
		wp_reset_postdata();
	?>
	<?php
		$args = array( 'posts_per_page' => 2, 'offset'=> 1, 'category' => 8, 'tag_id' => 457 );
		$myposts = get_posts( $args );
		foreach ( $myposts as $post ) : setup_postdata( $post ); 
	?>
	<div class="row">
		<h5 id="menage-title" class="title-holder"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
	</div>
	<?php 
		endforeach; 
		wp_reset_postdata();
	?>
</div>
<div id="menage" class="col-xs-3">
	<div class="row">
		<h4 id="menage-1-header" class="header-holder"> 
			<a href="<?php echo get_bloginfo("url");?>/kicker/vignette">Vignette</a>
		</h4>
	</div>
	<?php
		$args = array( 'posts_per_page' => 1, 'offset'=> 0, 'category' => 8, 'tag_id' => 466 );
		$myposts = get_posts( $args );
		foreach ( $myposts as $post ) : setup_postdata( $post ); 
	?>
	<div class="row">
		<div id="menage-1-photo" class="photo-small photo-holder col-xs-6">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('img.attachment-full'); ?></a>
		</div>
	</div>
	<div class="row">
		<h5 id="menage-title" class="title-holder"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
	</div>
	<?php 
		endforeach; 
		wp_reset_postdata();
	?>
	<?php
		$args = array( 'posts_per_page' => 2, 'offset'=> 1, 'category' => 8, 'tag_id' => 466 );
		$myposts = get_posts( $args );
		foreach ( $myposts as $post ) : setup_postdata( $post ); 
	?>
	<div class="row">
		<h5 id="menage-title" class="title-holder"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
	</div>
	<?php 
		endforeach; 
		wp_reset_postdata();
	?>
</div>
<div id="menage" class="col-xs-3">
	<div class="row">
		<h4 id="menage-1-header" class="header-holder"> 
			<a href="<?php echo get_bloginfo("url");?>/kicker/lounge">Lounge</a>
		</h4>
	</div>
	<?php
		$args = array( 'posts_per_page' => 1, 'offset'=> 0, 'category' => 8, 'tag_id' => 461 );
		$myposts = get_posts( $args );
		foreach ( $myposts as $post ) : setup_postdata( $post ); 
	?>
	<div class="row">
		<div id="menage-1-photo" class="photo-small photo-holder col-xs-6">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('img.attachment-full'); ?></a>
		</div>
	</div>
	<div class="row">
		<h5 id="menage-title" class="title-holder"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
	</div>
	<?php 
		endforeach; 
		wp_reset_postdata();
	?>
	<?php
		$args = array( 'posts_per_page' => 2, 'offset'=> 1, 'category' => 8, 'tag_id' => 461 );
		$myposts = get_posts( $args );
		foreach ( $myposts as $post ) : setup_postdata( $post ); 
	?>
	<div class="row">
		<h5 id="menage-title" class="title-holder"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
	</div>
	<?php 
		endforeach; 
		wp_reset_postdata();
	?>
</div>
<div id="menage" class="menage-last col-xs-3">
	<div class="row">
		<h4 id="menage-1-header" class="header-holder"> 
			<a href="<?php echo get_bloginfo("url");?>/kicker/exposition">Exposition</a>
		</h4>
	</div>
	<?php
		$args = array( 'posts_per_page' => 1, 'offset'=> 0, 'category' => 8, 'tag_id' => 459 );
		$myposts = get_posts( $args );
		foreach ( $myposts as $post ) : setup_postdata( $post ); 
	?>
	<div class="row">
		<div id="menage-1-photo" class="photo-small photo-holder col-xs-6">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('img.attachment-full'); ?></a>
		</div>
	</div>
	<div class="row">
		<h5 id="menage-title" class="title-holder"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
	</div>
	<?php 
		endforeach; 
		wp_reset_postdata();
	?>
	<?php
		$args = array( 'posts_per_page' => 2, 'offset'=> 1, 'category' => 8, 'tag_id' => 459 );
		$myposts = get_posts( $args );
		foreach ( $myposts as $post ) : setup_postdata( $post ); 
	?>
	<div class="row">
		<h5 id="menage-title" class="title-holder"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
	</div>
	<?php 
		endforeach; 
		wp_reset_postdata();
	?>
</div>