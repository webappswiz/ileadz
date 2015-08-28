<?php
/**
 * Template Name: Bedankt Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header('contact'); ?>


  <?php if ( have_posts() ) the_post(); if(get_the_content()) { the_content(); }  else { ?>
 
<section class=" gray">
  <div class="inner">

  
  <h2 class="centered">Bedankt voor uw aanvraag!</h2>
  <h4 class="centered turquoise">Wij nemen zo snel mogelijk contact met u op!</h2>
  
  <div class="ba-text">
   
  <p>rem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  </p>
  
  </div>
  

  
  
     <ul class="ba-social">
        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/f.jpg" alt="image"  /></a></li>
        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/t.jpg" alt="image"  /></a></li>
        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/p.jpg" alt="image"  /></a></li>
        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/g.jpg" alt="image"  /></a></li>
     </ul>
 
  
  
  
  
  
  
  
  </div>  
  </div>
  
  
</section>


    
    <?php } ?>
	
<?php  get_sidebar('bedankt'); ?>   


<?php  get_footer(); ?>