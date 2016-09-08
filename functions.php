	<?php

/***
 *  nav barr setup
 *  
 *  **?
 */
 function navigation_bar()
 {
	 add_theme_support('menus');
	 register_nav_menu('primary','header navigation');

	 
 }
 add_action('init','navigation_bar');
 

 add_theme_support('custom-background');
/**
* @desc make the site's heading & tagline an h1 on the homepage and an h4 on internal pages
* Naked's default CSS should make the two different states look identical
*/
function do_heading()
{
  $output = "";
  $subhead = "";
  if(is_home()) $output .= "<h1>"; else  $output .= "<h4>";

  $output .= "<a href='"  . get_bloginfo('url') . "'>" . get_bloginfo('name') . "</a> <br><span>";

  if(is_home()) $output .= "</h1>"; else  $output .= "</h4>";
  
  $subhead .= "<h7>" . get_bloginfo('description') . "</span><br>". "</h7>";
  $output .= $subhead;
  return $output;
}

/**
* register_sidebar()
*
*@desc Registers the markup to display in and around a widget
*/
if ( function_exists('register_sidebar') )
{
  register_sidebar(array(
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget' => '</li>',
    'before_title' => '',
    'after_title' => '',
  ));
}

/**
* Check to see if this page will paginate
* 
* @return boolean
*/
function will_paginate() 
{
  global $wp_query;
  
  if ( !is_singular() ) 
  {
    $max_num_pages = $wp_query->max_num_pages;
    
    if ( $max_num_pages > 1 ) 
    {
      return true;
    }
  }
  return false;
}

/**
 *  Excerpt Button----->
 */
 function custom_excerpt_length(){
	 return 25;
 }


add_filter('excerpt_length','custom_excerpt_length');


?>

