<?php 

function load_stylesheets(){

	
wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css' , array(),false,'all');
	wp_enqueue_style('bootstrap');

	wp_register_style('style', get_template_directory_uri() . '/style.css' , array(),false,'all');
	wp_enqueue_style('style');
	
}
add_action('wp_enqueue_scripts','load_stylesheets');




function loadjs(){

wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js' , '',1 , true);
	wp_enqueue_script('customjs');

	

	
}

add_action('wp_enqueue_scripts','loadjs');
add_theme_support('post-thumbnails');
add_theme_support('widgets');
add_theme_support('menus');
register_nav_menus(
array(

'top-menu'=> __('Top menu','theme'),
'footer-menu'=> __('Footer menu','theme'),

)

);
add_image_size('smallest',300,200,false);
add_image_size('largest',800,400,false);

function my_first_type(){
 $args=array(
 	'labels'=>array(
'name'=>'travels',
'sigular_name'=>'travel',
 	),
 	'hierarchical'=>false,
'public'=> true,
'has_archive'=>true,
'supports'=>array('title','editor','thumbnail','custom-fields'),
// 'rewrite'=>array('slug'=>'my-travel'),
 );
register_post_type('travels',$args);

}
add_action('init','my_first_type');

function my_first_taxonomy(){
$args=array(
	'labels'=>array(
'name'=>'brands',
'sigular_name'=>'brand',
 	),
 	
 	'hierarchical'=>true,
'public'=> true,

// 'rewrite'=>array('slug'=>'my-travel'),
 );
register_taxonomy('brands',array('travels'),$args);

}
add_action('init','my_first_taxonomy');

//sidebars
function my_sidebars(){
register_sidebar(
array(
'name'=>'page Sidebar',
'id'=>'page_sidebar',
'before_title'=>'<h4 class="widget-title">',
'after_title'=>'</h4>'

)

);
register_sidebar(
array(
'name'=>'Blog Sidebar',
'id'=>'blog_sidebar',
'before_title'=>'<h4 class="widget-title">',
'after_title'=>'</h4>'

)

);


}
add_action('widgets_init','my_sidebars');
 ?>
