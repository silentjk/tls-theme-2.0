<div id="car" class="module col-xs-12">
	<h2 id="car-title">
		<?/*insert category here*/?>
		Headlines
	</h2>
</div>
<div id="myCarousel" class="carousel slide">
	<!-- Indicators --> 
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>
	</ol>

	<!-- 16x9 ratio photos -->
	<div class="carousel-inner">
		<?php
			$args = array( 'posts_per_page' => 4, 'offset'=> 0, 'category' => 10);
			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post ); 
		?>
		<div class="<?php 
						if($post === reset($myposts)){
							echo "item active";
						}
						else{
							echo "item";
						}
					?>">
			<div class="photo-car">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('img.attachment-full'); ?></a>
			</div>
			<div class="container">
				<div class="item-caption col-sm-8 col-md-8 clearfix">
					<div class="carousel-caption">
						<div class="col-sm-12 col-md-12 clearfix">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						</div>
						<div class="col-sm-12 col-md-12 clearfix">
							<p class="carousel-paragraph"><?php echo get_the_excerpt($post->ID, true); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php 
			endforeach; 
			wp_reset_postdata();
		?>
	</div>
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		<i class="fa fa-chevron-left "></i>
	</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">
		<i class="fa fa-chevron-right "></i>
	</a>
			</div><!-- /.carousel -->