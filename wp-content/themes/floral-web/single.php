<?php get_header(); ?>
<!-- single -->
	<div class="content sing">
	<div class="container">
		<div class="content-text cnt-txt">	
			<div class="title">
				<?php
				if(have_posts()):
					while(have_posts() ) : the_post(); 
						?>
				<div class="some-title">
					<h3><?php echo get_the_title(); ?></h3>
				</div>
				<div class="john">
					<p>Written by <a href="#"><?php the_author(); ?></a><span><?php echo get_the_date('F j Y'); ?></span></p>
				</div>
				<div class="clearfix"> </div>
				<div class="tilte-grid">
					<?php the_post_thumbnail(); ?>
					<p><?php echo the_content(); ?></p>
			 
				</div>
				
				<div class="related-posts">
					<h3>Related Posts</h3>
					<div class="related-posts-grids">
						<div class="related-posts-grid">
							<a href="#"><img src="images/5.jpg" alt=" " /></a>
							<h4><a href="#">Maecenas pulvinar</a></h4>
							<p>Nunc pulvinar augue non felis dictum ultricies. Donec lacinia, 
								enim sit amet volutpat sodales, lorem velit fringilla metus, et
								semper metus sapien non odio. Nulla facilisi.</p>
						</div>
						<div class="related-posts-grid">
							<a href="#"><img src="images/7.jpg" alt=" " /></a>
							<h4><a href="#">Maecenas pulvinar</a></h4>
							<p>Nunc pulvinar augue non felis dictum ultricies. Donec lacinia, 
								enim sit amet volutpat sodales, lorem velit fringilla metus, et
								semper metus sapien non odio. Nulla facilisi.</p>
						</div>
						<div class="related-posts-grid">
							<a href="#"><img src="images/6.jpg" alt=" " /></a>
							<h4><a href="#">Maecenas pulvinar</a></h4>
							<p>Nunc pulvinar augue non felis dictum ultricies. Donec lacinia, 
								enim sit amet volutpat sodales, lorem velit fringilla metus, et
								semper metus sapien non odio. Nulla facilisi.</p>
						</div>
						<div class="related-posts-grid">
							<a href="#"><img src="images/8.jpg" alt=" " /></a>
							<h4><a href="#">Maecenas pulvinar</a></h4>
							<p>Nunc pulvinar augue non felis dictum ultricies. Donec lacinia, 
								enim sit amet volutpat sodales, lorem velit fringilla metus, et
								semper metus sapien non odio. Nulla facilisi.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="related-posts-grids">
						<div class="related-posts-grid">
							<a href="#"><img src="images/6.jpg" alt=" " /></a>
							<h4><a href="#">Maecenas pulvinar</a></h4>
							<p>Nunc pulvinar augue non felis dictum ultricies. Donec lacinia, 
								enim sit amet volutpat sodale.</p>
						</div>
						<div class="related-posts-grid">
							<a href="#"><img src="images/8.jpg" alt=" " /></a>
							<h4><a href="#">Maecenas pulvinar</a></h4>
							<p>Nunc pulvinar augue non felis dictum ultricies. Donec lacinia, 
								enim sit amet volutpat sodales.</p>
						</div>
						<div class="related-posts-grid">
							<a href="#"><img src="images/5.jpg" alt=" " /></a>
							<h4><a href="#">Maecenas pulvinar</a></h4>
							<p>Nunc pulvinar augue non felis dictum ultricies. Donec lacinia, 
								enim sit amet volutpat sodale.</p>
						</div>
						<div class="related-posts-grid">
							<a href="#"><img src="images/7.jpg" alt=" " /></a>
							<h4><a href="#">Maecenas pulvinar</a></h4>
							<p>Nunc pulvinar augue non felis dictum ultricies. Donec lacinia, 
								enim sit amet volutpat sodale.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<div class="categories">
				<div class="wrap" style="color: green;">
	       <div id="primary" class="content-area">
		   <main id="main" class="site-main" role="main">

			<?php get_search_form(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->
				<div class="categ">
					<div class="cat">
						<h3>Categories</h3>
						<ul>
							<li><a href="#">Lorem ipsum dolor sit amet</a></li>
							<li><a href="#">Consectetur adipiscing elit</a></li>
							<li><a href="#">Etiam aliquet convallis enim ut</a></li>
							<li><a href="#">Donec at pretium dui</a></li>
							<li><a href="#">Nulla sed massa sagittis venenatis</a></li>
							<li><a href="#">Praesent nec tortor nec massa</a></li>
						</ul>
					</div>
					<div class="recent-com">
						<h3>Recent Comments</h3>
						<ul>
							<li><a href="#">Donec consequat</a> suscipit leo at accumsan. In hac habitasse platea dictumst.</li>
							<li><a href="#">Aliquam erat ipsum,</a> consequat id venenatis suscipit, venenatis sed leo.
								Ut nec lacus in sem eleifend semper id ac dolor.</li>
							<li><a href="#">Etiam aliquet convallis enim ut 
									<span>Donec at pretium dui</span></a></li>
							<li><a href="#">Nulla sed massa sagittis</a> venenatis Praesent nec tortor nec massa </li>
							<li><a href="#">Donec faucibus mollis dolor
								<span>in ullamcorper.</span></a></li>
							<li><a href="#">Aliquam erat ipsum,</a> consequat id venenatis suscipit, venenatis sed leo.
								Ut nec lacus in sem eleifend semper id ac dolor.</li>
							<li><a href="#">Etiam aliquet convallis enim ut 
									<span>Donec at pretium dui</span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
			<div class="comments">
					<h4>Comments</h4>
					<div class="comments-info">
						<div class="cmnt-icon-left">
							<a href="#"><img src="images/icon3.png" alt=""/></a>
						</div>
						<div class="cmnt-icon-right">
							<p>MAY 13, 2015</p>
							<p><a href="#">Admin</a></p>
							<p class="cmmnt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
							sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
						<div class="clearfix"> </div>
						<div class="aliqua">
							<a href="#">Reply</a>
						</div>
					</div>
					<div class="comments-info">
						<div class="cmnt-icon-left">
							<a href="#"><img src="images/icon3.png" alt=""/></a>
						</div>
						<div class="cmnt-icon-right">
							<p>MAY 13, 2015</p>
							<p><a href="#">Admin</a></p>
							<p class="cmmnt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
							sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
						<div class="clearfix"> </div>
						<div class="aliqua">
							<a href="#">Reply</a>
						</div>
					</div>
					<div class="comments-info">
						<div class="cmnt-icon-left">
							<a href="#"><img src="images/icon3.png" alt=""/></a>
						</div>
						<div class="cmnt-icon-right">
							<p>MAY 13, 2015</p>
							<p><a href="#">Admin </a></p>
							<p class="cmmnt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
							sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
						<div class="clearfix"> </div>
						<div class="aliqua">
							<a href="#">Reply</a>
						</div>
					</div>
				</div>
		
	<?php
	if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif; 
?>
		<div class="consequat">
				<h4>Leave Your Comment Here</h4>
				<form>
					<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
					<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}" required="">
					<textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
					<input type="submit" value="Submit" >
				</form>
			</div>
			
		</div>
	</div>
	</div>
	<?php
			
endwhile;
endif;
wp_reset_postdata();
?>
<!-- single -->
<?php get_footer(); ?>