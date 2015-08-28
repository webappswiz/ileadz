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
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>

<link rel='stylesheet' id='custom-css'  href='<?php echo get_template_directory_uri(); ?>/custom.css?<?php echo microtime(); ?>' type='text/css' media='all' />
<link rel='stylesheet' id='media-css'  href='<?php echo get_template_directory_uri(); ?>/media.css?<?php echo microtime(); ?>' type='text/css' media='all' />

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
  
  $("#various2").fancybox();
    
	 $(".pakket .submit a").on('click', function(event){
	   event.preventDefault();
	   $.fancybox.close();
	 });

  
   
 $('#spec-menu').css('height', 'auto');
 var curHeight = $('#spec-menu').height();
 $('#spec-menu').css('height', "0px");
 
 if($(".menu-toggle").css('display') =="block") { curHeight = "100%";}
 /**/
 
 /*
  $('.main-menu li.special a').on('click',function(e){
	  alert('click on special A');
});	

 $('.main-menu li.special').on('mouseenter',function(e){
	  alert('mouseenter on special');
});	 
*/ 

	   
var first_enter = 1;
	 
 $('.main-menu li.special a').on('mouseenter',function(e){
	/*
	 alert('mouseenter on special A');
	 e.stopPropagation();
	*/
	
	if($('#spec-menu').css("display")=="block") 
	 { prepereHideSpecial(); first_enter = 1;} 
	  else {  $('#spec-menu').css("display","block").animate({height:curHeight, paddingTop:50, paddingBottom:50},500); 
	  if(parseInt($("#go-top").css('opacity')) < 1) first_enter = 0; }
	
	/*cancelHideSpecial();*/
	 
 });
  
 $('.main-menu li.special').on('mouseleave',function(){
	 if($('#spec-menu').css("display")=="block") prepereHideSpecial();
	 
 });


  $('.main-menu li.special').on('click',function(e){
	   
	 /* alert('click on special');*/
	  
/*	if($('#spec-menu').hasClass("was-clicked")  ) {   }
	
	else */ if($('#spec-menu').css("display")=="block" && first_enter ==1) {prepereHideSpecial();} else { 
	 $('#spec-menu').css("display","block").animate({height:curHeight, paddingTop:50, paddingBottom:50},500); 
	 first_enter = 1;
	 }

	 first_enter =1;
 });
 
	  
 
 var timeout_id;
 
 function prepereHideSpecial() { timeout_id = setTimeout(hideSpecial, 200);  first_enter =1;}
 function cancelHideSpecial() {clearTimeout(timeout_id);}
 
 //function hideSpecial() { $('#spec-menu').slideUp('fast'); }
 
 function hideSpecial() { $('#spec-menu').animate({height:0, paddingTop:0, paddingBottom:0},500, function(){$('#spec-menu').css("display","none");}); }
 
 
 $('#spec-menu').on('mouseenter',function(){
	 cancelHideSpecial();
 });
 $('#spec-menu').on('mouseleave',function(){
	 if($('#spec-menu').css("display")=="block") prepereHideSpecial();
 });
  
  
  
  
 
  
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

<script>
    $(document).ready(function () {

      
       
    });
</script>

<script src='https://www.google.com/recaptcha/api.js'></script>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

<div id="site-top-block">

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
      
     <div id="spec-menu">
     <div class="inner">
      <div class="special-menu-block special-menu-block-1">
       <div class="special-menu-block-title"><?php echo get_option('special-1','Zoekmachine adverteren'); ?></div>
       <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'special-menu', 'menu' => 'Special-1' ) ); ?>
      </div>
      
      <div class="special-menu-block special-menu-block-2">
       <div class="special-menu-block-title"><?php echo get_option('special-2','Website verbetering'); ?></div>
       <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'special-menu', 'menu' => 'Special-2' ) ); ?>
      </div>
      
      <div class="special-menu-block special-menu-block-3">
       <div class="special-menu-block-title"><?php echo get_option("special-3","Zoekmachineoptimalisatie");  ?></div>
       <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'special-menu', 'menu' => 'Special-3' ) ); ?>
      </div>
      
      <div class="special-menu-block special-menu-block-4">
       <div class="special-menu-block-title"><?php echo get_option('special-4','Fotografie'); ?></div>
       <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'special-menu', 'menu' => 'Special-4' ) ); ?>
      </div>
      
      <div class="special-menu-block special-menu-block-5">
       <div class="special-menu-block-title"><?php echo get_option('special-5','Overig'); ?></div>
       <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'special-menu', 'menu' => 'Special-5' ) ); ?>
      </div>
     </div>
    </div>   
    
       
   
    
     </div>

	<div id="main" class="wrapper">
	
	