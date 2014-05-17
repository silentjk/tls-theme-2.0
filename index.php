<?php get_header(); ?>

<div id="content" class="clearfix row single-container">
	<div id="main" class="col-xs-8 col-sm-8 col-md-8 col-lg-8 clearfix" role="main">
		<!--CAROUSEL PHP HERE-->
		<div class="row">
			<?php include('main-carousel.php');?>
		</div>

		<!--UNIV PHP HERE-->
		<div class="row">
			<?php include('main-university.php');?>
		</div>

		<!--NATSIT PHP HERE-->
		<div class="row">
			<?php include('main-natsit.php');?>
		</div>

		<div class="row">
			<?php include('main-sports.php');?>
			<?php include('main-opinion.php');?>
		</div>

		<!--MENAGE PHP HERE-->
		<div class="row row-menage">
			<?php include('main-menagerie.php');?>
		</div>

		<!--EDITORIAL PHP HERE-->
		<div class="row">
			<?php include('main-editorial.php');?>
		</div>

		<div class="row">
			<div class="others-main col-xs-12">
				<div class="row">
					<!--GREEN GALLERY PHP HERE-->
					<?php include('main-greengallery.php');?>

					<!--PRESS RELEASE PHP HERE-->
					<?php include('main-sportsrevisited.php');?>
				</div>
			</div>

			<!--
			<div class="others-main col-xs-12">
				<div class="row">
					<?php include('main-paintingwithlight.php');?>

					<?php include('main-poptown.php');?>
				</div>
			</div>
			-->
		</div>

	</div> <!-- end #main -->
	<?php get_sidebar('sidebar1'); // sidebar 1 ?>
</div> <!-- end #content -->

<?php get_footer(); ?>