<?php get_header(); ?>
<section id="content" role="main">

  <header class="section-header">
    <div class="container">
      <h1>SHARE News</h1>
    </div>
  </header>

  <div class="container">
    
    <div class="main-content">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part('entry'); ?>
      <?php if ( ! post_password_required() ) comments_template('', true); ?>
      <?php endwhile; endif; ?>
      <footer class="footer">
      <?php get_template_part('nav', 'below-single'); ?>
      </footer>
    </div> <!-- .main-content -->

    <?php get_sidebar(); ?>

  </div> <!-- .container -->

</section>
<?php get_footer(); ?>