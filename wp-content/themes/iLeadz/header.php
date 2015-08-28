<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>

<link rel='stylesheet' id='custom-css'  href='<?php echo get_template_directory_uri(); ?>/custom.css' type='text/css' media='all' />
<link rel='stylesheet' id='media-css'  href='<?php echo get_template_directory_uri(); ?>/media.css' type='text/css' media='all' />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,700italic' rel='stylesheet' type='text/css'>

 
  <script src="//code.jquery.com/jquery-1.8.2.js"></script>

  
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/fancybox/jquery.fancybox-1.3.4.js"></script>



<script type="text/javascript">
$(document).ready(function() {
  $("#various-pak-1").fancybox();
  $("#various-pak-2").fancybox();
  $("#various-pak-3").fancybox();
  $("#various-pak-4").fancybox();
  
  $("#various1").fancybox();
    
	/*
	 $(".pakket .submit a").on('click', function(event){
	   event.preventDefault();
	   $.fancybox.close();
	 });
	 
	 */

   $('#custom-overlay').on('click', function(event){
	  event.preventDefault();
	  event.stopPropagation();
	  $(this).css('display','none');
	  
  });
  
  $('#Laat').on('click', function(event){
	  event.preventDefault();
	  $('#top-face-popup').slideToggle();
	  if($('#custom-overlay').css('display') == "none") $('#custom-overlay').css('height', $(document).height()).show();
	   else $('#custom-overlay').hide();
	  
  });
  /*
  $('.tfp-first a').on('click', function(event){
	  event.preventDefault();
	  if($('.tfp-first').find('.error')) {
	  } else {
		  $(".tfp-first a").off();
	  $('#top-face-popup .tfp-first').slideUp(800);
	  $('#top-face-popup .tfp-second').slideDown(800);
	  }
  });
  */
  
  
  
  
  $('.price_block').on('mouseover', function(event){
	  $('.price-block-desc').hide();
	  $(this).find('.price-block-desc').show();
  });
  
  $(window).scroll(function () {
    if ($(window).scrollTop() > 1000){
        $('#go-top').fadeIn();
    }
	else {
	 $('#go-top').fadeOut();
	}
});

  $('#go-top').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 1500);
			return false;
		});
  
});
</script>


</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

<div id="site-top">
      <div class="inner">
        <h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        
        
       <div id="top-face">
         <a href="#" class="red-button" id="Laat">Laat je terugbellen</a>
         
         <div id="top-face-popup">
         
        
         <form action="<?php echo get_bloginfo('url');?>/bedankt-laat/" method="post">
         <div class="tfp-first">
          <b>Tijd van uw voorkeur:</b>
     
           <div id="radio">
            <p><input type="radio" id="radio1" name="radio" value="09:00 13:00"><label for="radio1">09:00 13:00</label></p>
            <p><input type="radio" id="radio2" name="radio" checked="checked" value="13:00 18:00"><label for="radio2">13:00 18:00</label></p>
            <p><input type="radio" id="radio3" name="radio"><label for="radio3" value="18:00 21:00">18:00 21:00</label></p>
           </div>
          
           
           
           <div class="row"><input type="text" placeholder="Naam" name="naam" required /></div>
           <div class="row"><input type="tel" name="telefoon" placeholder="Telefoon" /></div>
           <div class="row"><input type="email" name="emailadres" placeholder="E-mailadres" required /></div>
     
      
    
                 
          <a href="#" class="red-button full big">VERZENDEN</a>
          </div>
        
          <div class="tfp-second">
            <b>Bedankt voor uw aanvraag</b>
            <p>Wij nemen binnen 24 uur contact met u op binnen uw aangegeven tijdsvoorkeur.</p>
            
            <a href="#" class="red-button full big">SLUITEN</a>
          </div>
          <input type="hidden" name="footer-submitted" value="1" />
         </form> 
         </div> <!-- top-face-popup -->

       </div>
       
       	<h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>	
     
        <nav id="site-navi" role="navigation">
        
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'main-menu', 'menu' => 'Main menu','link_after'  => '<span></span>', ) ); ?>
	    </nav><!-- #site-navigation -->
     </div>       
    </div><!-- #site-top -->

	<div id="main" class="wrapper">
	
    <div id="sss"><div id="sss-align">
	<?php //layerslider(1) ?>
    <?php 
    echo do_shortcode("[metaslider id=194]"); 
?>
    </div>
    </div>
    
    <div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
    <div class="inner">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
    </div>
    </div>