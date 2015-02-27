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
      <?php endwhile; endif; ?>
      <footer class="post-footer">
        <div class="metadata">
          <span class="byline">By</span>
          <?php the_field('author_name'); ?><br />
          <?php if (get_field('phone_number')) { the_field('phone_number'); } echo '<br />'; ?>
          <?php if (get_field('email_address')) { echo '<a href="mailto:' . get_field('email_address') . '">' . get_field('email_address') . '</a>'; } echo '<br />'; ?>
        </div>
        <div class="tags">
          <span class="tag-title">
            Tags
          </span>
          <?php echo get_the_tag_list('',', ',''); ?>
        </div>
      </footer>
      <div class="clearfix"></div>
    </div> <!-- .main-content -->

    <?php get_sidebar(); ?>

  </div> <!-- .container -->

</section>
<?php get_footer(); ?>