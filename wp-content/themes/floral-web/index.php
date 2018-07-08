<?php
get_header();
?>
<!-- content -->
	<div class="content">
	<div class="container">
		<div class="content-text">	
			<div class="title">
				<?php
				if(have_posts()):
					while(have_posts() ) : the_post(); 
						?>
						<div class="some-title">
					<h3><a href="<?php the_permalink();?>"><?php echo get_the_title(); ?></a></h3>
				</div>
				<div class="john">
					<p>Written by <a href="#"><?php the_author(); ?></a><span><?php echo get_the_date('F j Y'); ?></span></p>
				</div>
				<div class="clearfix"> </div>
				<div class="tilte-grid">
					<a href="<?php the_permalink();?>"> <?php the_post_thumbnail(); ?></a>
					<p class="vel"><a href="<?php the_permalink(); ?>">Phasellus vel arcu vitae neque sagittis aliquet ac at purus.
					Vestibulum varius eros in dui sagittis non ultrices orci hendrerit.
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					</a></p>
					<p class="Sed">
					<span><?php echo wp_trim_words(get_the_content(),30);?></span></p> 
				</div>
				<div class="read">
					<a href="<?php the_permalink();?>">continue..</a>
				</div>
				<?php
			
				endwhile;?>
			
				
				<div class="border1">
					
					<div class="number">
						<ul>
							<?php
	the_posts_pagination( array(
	'mid_size'  => 2,
	'prev_text' => __( '', 'textdomain' ),
	'next_text' => __( '', 'textdomain' ),
) );?>
						</ul>
					</div>
					
					<div class="clearfix"> </div>
				</div>
			</div>

				<?php
			else:
			
				get_template_part('template-parts/page/content','none');

			endif;

			wp_reset_postdata();
				?>
		
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
						<?php echo dynamic_sidebar('sidebar-1'); ?>
						<h3>Categories</h3>
						<ul>
							<li><a href="single.html">Lorem ipsum dolor sit amet</a></li>
							<li><a href="single.html">Consectetur adipiscing elit</a></li>
							<li><a href="single.html">Etiam aliquet convallis enim ut</a></li>
							<li><a href="single.html">Donec at pretium dui</a></li>
							<li><a href="single.html">Nulla sed massa sagittis venenatis</a></li>
							<li><a href="single.html">Praesent nec tortor nec massa</a></li>
						</ul>
					</div>
					<div class="recent-com">
						<h3>Recent Comments</h3>
						<ul>
							<li><a href="single.html">Donec consequat</a> suscipit leo at accumsan. In hac habitasse platea dictumst.</li>
							<li><a href="single.html">Aliquam erat ipsum,</a> consequat id venenatis suscipit, venenatis sed leo.
								Ut nec lacus in sem eleifend semper id ac dolor.</li>
							<li><a href="single.html">Etiam aliquet convallis enim ut 
									<span>Donec at pretium dui</span></a></li>
							<li><a href="single.html">Nulla sed massa sagittis</a> venenatis Praesent nec tortor nec massa </li>
							<li><a href="single.html">Donec faucibus mollis dolor
								<span>in ullamcorper.</span></a></li>
						</ul>
					</div>
					<div class="view">
						<a href="single.html">View More</a>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	</div>
<!-- //content -->

<?php
get_footer(); 
?>