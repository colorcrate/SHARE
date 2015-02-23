<aside id="sidebar" role="complementary">
  <div id="primary" class="widget-area">
    <ul class="xoxo">
    
    <?php 
      // News Sidebar
      if (get_post_type() === 'news') {
        dynamic_sidebar('news-sidebar');
      }
      else {
        // Create subnav for this section, if subnav exists
        echo list_section_navigation();
        // dynamic_sidebar('primary-widget-area'); 
      }
    ?>

    </ul>
  </div>
</aside>