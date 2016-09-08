<?php 
global $spx;?>

<?php get_header(); ?>


<div class="author_wrap layer_wrapper">
    <!--AUTHOR BIO START-->
        <!-- This sets the $curauth variable -->

    <?php
    $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
    ?>
	<div class="author_dsc">
    <h2>About: <?php echo $curauth->nickname; ?></h2>
    <dl>
        <dt>Website :</dt>
        <dd><a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a></dd>
        <dt>Profile :</dt>
        <dd><?php echo $curauth->user_description; ?></dd>
    </dl>
    <h2>Posts by <?php echo $curauth->nickname; ?>:</h2>
    <ul></div>
        
    <!--AUTHOR BIO END-->
    
    <div id="content">
         <!-- The Loop -->

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <li>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
            <?php the_title(); ?></a>,
            <?php the_time('d M Y'); ?> in <?php the_category('&');?>
        </li>

    <?php endwhile; else: ?>
        <p><?php _e('No posts by this author.'); ?></p>

    <?php endif; ?>

<!-- End Loop -->
	</div><!--#content END-->
<!---
	The otHer author list
-->
<h2>List of authors:</h2>
<ul>
<?php wp_list_authors(); ?>
</ul>

</div><!--layer_wrapper class END-->
<div  id="secondaryContent">
<?php get_sidebar(); ?></div>
<?php get_footer(); ?>