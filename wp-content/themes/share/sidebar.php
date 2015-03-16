<aside id="sidebar" role="complementary">
  <div id="primary" class="widget-area">
    <ul class="xoxo">
    <?php 
      // News sidebar
      if (is_home() || is_singular('post') || is_archive() && get_post_type() != 'kb') {
        if (is_single()) {
          // Display related posts (show_related_posts() defined in functions.php)
          $relatedPosts = show_related_posts($post);
          if ($relatedPosts['has_posts'] === true) {
            echo '<li class="pagenav">';
            echo '<h3>Related Posts</h3>';
            echo $relatedPosts['posts'];
            echo '</li>';
          }
          else {
            echo 'false';
          }
          // print_r($relatedPosts);
        }
        dynamic_sidebar('news-sidebar');
      }
      // Knowledge Base sidebar
      else if (get_post_type() === 'kb') {

        // Sidebar for single Knowledge Base posts
        if (!is_search()) {
          // Build subnavigation based on the section this knowledge domain is in
          $currentPageID = $post->ID;
          $terms = wp_get_post_terms($post->ID, 'section');

          foreach( $terms as $term ) : 
            
            echo '<li class="pagenav knowledge-base-items">';
            echo '<h3>' . $term->name . '</h3>';
            echo '<ul>';

            $posts = new WP_Query( "taxonomy=section&term=$term->slug" );

            if( $posts->have_posts() ): while( $posts->have_posts() ) : $posts->the_post();
                if (get_the_ID() === $currentPageID) { // Mark current item as active
                  echo '<li class="current_page_item">';
                }
                else {
                  echo '<li>';
                }
                echo '<a href="' . get_the_permalink() . '" title="' . get_the_title() . '" rel="bookmark">' . get_the_title() . '</a>';
                echo '</li>';
            endwhile; endif;

            echo '<li><a href="' . get_bloginfo('url') . '/kb/" title="SHARE Knowledge Base">&laquo; SHARE Knowledge Base home</a></li>';
            echo '</ul>';
            echo '</li>';

          endforeach;
        }
        // Sidbar for Knowledge Base search results
        else {
          echo '<li class="pagenav knowledge-base-items">';
          echo '<h3>Knowledge Base</h3>';
          echo '<a href="' . get_bloginfo('url') . '/kb/" title="SHARE Knowledge Base">&laquo; SHARE Knowledge Base home</a>';
          echo '</li>';
        }
      }
      // Contact sidebar
      else if (get_post_type() === 'contact') {
        echo '<li class="social-media">';
        echo '<h3>Get In Touch</h3>'; ?>
        <address>
          <?php the_field('address', 'option'); ?>
        </address>
      <?php // Grab social media links from Site-wide Options page
            if(get_field('social_media_links', 'option')): ?>
            <ul class="social">
              <?php while(has_sub_field('social_media_links', 'option')): ?>
              <li><a href="<?php the_sub_field('url'); ?>" target="_blank"><span class="ss-icon"><?php the_sub_field('icon'); ?></span> <?php the_sub_field('title'); ?></a></li>
              <?php endwhile; ?>
            </ul>
            <?php endif;
        echo '</li>';
      }
      else {
        // Create subnav for this section, if subnav exists
        echo list_section_navigation();
      }
    ?>

    </ul>
  </div>
</aside>