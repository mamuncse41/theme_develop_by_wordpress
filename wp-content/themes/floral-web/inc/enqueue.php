<?php
function floral_css_js(){
	wp_enqueue_style('flaticon',get_template_directory_uri().'/css/style.css', array(), '1.0.0', 'all'); 
	wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.css', array(), '1.0.0', 'all');
	//wp_enqueue_style('gmap',floral_fonts_url(), array(), '1.0.0');

	wp_enqueue_style('google-front',get_template_directory_uri().'http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800', array(), '1.0.0', 'all');
	wp_enqueue_style('google-front-two',get_template_directory_uri().'http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic', array(), '1.0.0', 'all');
	wp_enqueue_style('google-front-three',get_template_directory_uri().'http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic,900italic', array(), '1.0.0', 'all');
	wp_enqueue_script( 'js-min', get_template_directory_uri() . '/js/jquery.min.js', array('jquery'), '1.0.0', false );
	wp_enqueue_script( 'move-top', get_template_directory_uri() . '/js/move-top.js', array('jquery'), '1.0.0', false );
	wp_enqueue_script( 'easing', get_template_directory_uri() . '/js/easing.js', array('jquery'), '1.0.0', false );
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/modernizr.js', array('jquery'), '1.0.0', true );

}
add_action('wp_enqueue_scripts','floral_css_js');

// function floral_fonts_url() {
// $fonts_url = '';
//  $OpenSans = _x( 'on', 'OpenSans: on or off', 'theme-slug' );
//  $Lato = _x( 'on', 'Lato: on or off', 'theme-slug' );
//  $PlayfairDisplay = _x( 'on', 'PlayfairDisplay: on or off', 'theme-slug' );

// if ( 'off' !== $OpenSans || 'off' !== $Lato || 'off' !== $PlayfairDisplay){
// 	 $font_families = array();
//  if ( 'off' !== $OpenSans ){
//  $font_families[]=>'Open+Sans:400,300,600,700,800';
// }
//  if ( 'off' !== $Lato ){
//  $font_families[]=>'Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic';
//  }
//   if ( 'off' !== $PlayfairDisplay ){
//   	$font_families[]=>'Playfair+Display:400,700,900,400italic,700italic,900italic';
//   }
//   $query_args = array(
// 'family' =&gt; urlencode( implode( '|', $font_families ) ),
// 'subset' =&gt; urlencode( 'latin,latin-ext' ),
// );
//   $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
// }

 
   
// return esc_url_raw($fonts_url);
// }