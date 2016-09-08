<?php
/*
Template Name: Hide SideBar
*/
?>
<?php

  get_header();
?>
<div id="FullContent" >
  
  <div class="fullwidth">
    <div class="clearfix"></div>
    <?php
  if (have_posts()): ?>

  <ol id="posts"><?php

    while (have_posts()) : the_post(); ?>

    <li class="postWrapper" id="post-<?php the_ID(); ?>">

      <h2 class="postTitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
      <small><?php the_date(); ?> by <a href="?author=<?php the_author_id();?>"><?php the_author(); ?></a></small>

      <div class="post"><?php the_excerpt();?></div>
    <div class="btn"><a href="<?php the_permalink();?>">Read More...</a></div>
      <p class="postMeta">Category: <?php the_category(', ') . " " . the_tags(__('Tags: '), ', ', ' | ') . comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)')) . edit_post_link(__('Edit'), ' | '); ?></p>
    <hr>
    
      <hr class="noCss" />
    </li>

    <?php comments_template(); // Get wp-comments.php template ?>

    <?php endwhile; ?>

  </ol>

<?php else: ?>

  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php

  endif;
  ?>

  

    </div>
  <?php
  get_footer();
?>