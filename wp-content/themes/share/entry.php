<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header>
<?php if (get_post_type() === 'news') { ?>
  <?php get_template_part('entry', 'meta'); ?>
<?php } ?>
<?php 
  // Entry meta
  if (is_singular('post') || is_home()) {
    echo '<div class="entry-meta">';
    the_category( ' | ', $parents, $post->ID );
    echo ' | ';
    the_date('F j, Y');
    echo '</div>';
  }

  // Headline
  if ( is_singular() ) {
    echo '<h2 class="entry-title">';
    echo get_the_title();
    echo '</h2>';
  } else {
    echo '<h2 class="entry-title">';
    echo '<a href="' . get_the_permalink() . '" title="' . get_the_title() . '" rel="bookmark">' . get_the_title() . '</a>';
    echo '</h2>';
  } ?>
</header>
<?php get_template_part('entry', (is_home() || is_archive() || is_search() ? 'summary' : 'content')); ?>
<?php if (!is_search()) get_template_part('entry-footer'); ?>
</article>