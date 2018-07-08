<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage floral-web theme
 * @since 1.0
 * @version 1.0
 */
?>
<article>
	<?php
	the_title();
	?>
	<div class="entry-content">
	<?php
	the_content();
	?>
	<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
				'after'  => '</div>',
			) );
		?>
	</div>
	

</article>