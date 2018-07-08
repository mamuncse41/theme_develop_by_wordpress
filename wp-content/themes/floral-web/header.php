
<!DOCTYPE html>
<html>
<head>
<title>Floral a Blogging Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>


<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Floral Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- start-smoth-scrolling -->

<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>

<?php wp_head(); ?>
</head>
	
<body>
<!-- header -->
	<div class="header">
	<div class="container">
		<div class="header-info">
			<div class="logo">
				<a href="<?php the_permalink();?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=" " /></a>
			</div>

			<div class="logo-right">
					<?php wp_nav_menu(array(
				'theme_location' => 'header_menu',
				'container' => 'div',
				'container_class' => 'logo-right',
				'menu_class' => 'nav1',
				'depth'=>'3',
				//'fallback_cb'=>'WP_Bootstrap_Navwalker::fallback',
				//'walker'=>'WP_Bootstrap_Navwalker',
			)); ?>
				<span class="menu"><img src="<?php echo get_template_directory_uri(); ?>/images/menu.png" alt=" "/></span>
			
			</div>
			<div class="clearfix"> </div>
				<!-- script for menu -->
					<script> 
						$( "span.menu" ).click(function() {
						$( "ul.nav1" ).slideToggle( 300, function() {
						 // Animation complete.
						});
						});
					</script>
				<!-- //script for menu -->
		</div>
	</div>
	</div>
<!-- header -->