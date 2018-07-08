<!-- footer -->
	<div class="footer">
	<div class="container">
		<div class="footer-grids">
			<div class="footer-grid">
				<h3>About Us</h3>
				<p>Nullam ac urna velit. Pellentesque in arcu tortor. 
				Pellentesque nec est et elit varius pulvinar eget vitae sapien. 
				Aenean vehicula accumsan gravida. Cum sociis natoque penatibus
				et magnis dis parturient montes, nascetur ridiculus mus. Phasellus 
				et lectus in urna consequat consectetur ut eget risus. Nunc augue diam, 
				mattis eu tristique luctus, aliquam vitae massa. Praesent lacinia nisi 
				sit amet risus cursus porta.</p>
			</div>
			<div class="footer-grid">
				<?php wp_nav_menu(array(
				'theme_location' => 'footer_menu',
				'container' => 'div',
				'container_class' => 'footer-grid',
				'menu_class' => 'cap1',
				
			)); ?>
				<h3>Site Page</h3>
			
			</div>
			<div class="footer-grid">
				<h3>Praesent pharetra</h3>
				<ul>
					<li><a href="single.html">Vestibulum iaculis scelerisque</a></li>
					<li><a href="single.html">Cras aliquam erat</a></li>
					<li><a href="single.html">Morbi imperdiet ipsum</a></li>
					<li><a href="single.html">Donec faucibus mollis</a></li>
					<li><a href="single.html">Praesent lacinia nisi</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	</div>
	<div class="footer-bottom">
	<div class="container">
		<p>Template by<a href="http://techmamun.com/">Tech Mamun</a></p>
	</div>
	</div>
<!-- //footer -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
	</script>
<!-- //here ends scrolling icon -->
<?php 
wp_footer();
?>
</body>
</html>