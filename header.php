
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="sticky-top">

	<div class="container">
	<?php wp_nav_menu (
array(
'theme_location'=> 'top-menu',
'menu_class'=>'top-bar'

)

	) ?>

</div>
</header>