<?php get_header(); ?>
      
      <div id="content" class="clearfix row single-container">
      
        <div id="main" class="col-lg-8 col-md-8 col-sm-8 clearfix" role="main">

          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          
          <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
            
            <header>
              
              <div class="page-header"><h4><span class="tags-title"><?php the_tags('' . __("","bonestheme") . ''); ?></span> </h4><h1 class="single-title" itemprop="headline"><?php the_title(); ?></h1></div>
              
              <p class="meta"><?php _e("", "bonestheme"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_date(); ?></time> <?php _e("By", "bonestheme"); ?> <?php coauthors_posts_links(); ?>  <?php _e("under", "bonestheme"); ?> <?php the_category(', '); ?>.</p>
            
            </header> <!-- end article header -->
          
            <section class="post_content clearfix" itemprop="articleBody">

              <?php the_content(); ?>
              
              <?php wp_link_pages(); ?>
            

            </section> <!-- end article section -->
            
            <footer>
      
              
              
              <?php 
              // only show edit button if user has permission to edit posts
              if( $user_level > 0 ) { 
              ?>
              <a href="<?php echo get_edit_post_link(); ?>" class="btn btn-success edit-post"><i class="icon-pencil icon-white"></i> <?php _e("Edit post","bonestheme"); ?></a>
              <?php } ?>
              
            </footer> <!-- end article footer -->
          
          </article> <!-- end article -->
          
          <?php comments_template('',true); ?>
          
          <?php endwhile; ?>      
          
          <?php else : ?>
          
          <article id="post-not-found">
              <header>
                <h1><?php _e("Not Found", "bonestheme"); ?></h1>
              </header>
              <section class="post_content">
                <p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
              </section>
              <footer>
              </footer>
          </article>
          
          <?php endif; ?>
      
        </div> <!-- end #main -->
        
        <?php get_sidebar();?>

      </div> <!-- end #content -->

<?php get_footer(); ?>