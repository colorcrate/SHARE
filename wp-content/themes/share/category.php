<?php get_header(); ?>
<section id="content" role="main">

  <header class="section-header">
    <div class="container">
      <h1 class="entry-title">SHARE News</h1>
    </div>
  </header>

  <div class="container">
    <div class="main-content">
      <header class="header category-header">
        <h2 class="entry-title"><?php _e( 'Topic: ', 'blankslate' ); ?><?php single_cat_title(); ?></h2>
        <hr />
      </header>
      
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php get_template_part('entry'); ?>
      <?php endwhile; endif; ?>
      <?php get_template_part('nav', 'below'); ?>
    </div>

    <?php get_sidebar(); ?>    
  </div> <!-- .container -->
  
  <div class="clear"></div>
</section>
<?php get_footer(); ?>