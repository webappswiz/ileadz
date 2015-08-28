<?php
/**
 * Template Name: Referenties Page Template
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

get_header('referenties'); ?>

    
    
 <?php if ( have_posts() ) the_post(); if(get_the_content()) { the_content(); }  else { ?>



<section class="">
  <div class="inner">
    <div class="td-3">
      <img src="<?php echo get_template_directory_uri(); ?>/images/image-2.png" alt="image"  />
    </div>
    <div class="td-4 big-text">
      <h2>360º fotografie</h2>
      <h3 class="turquoise">Zes redenen voor een Google Business View </h3>
      <div class="space-devider-20"></div>
      <p>
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium. totam rem aperiam.
      </p>
      
      <div class="space-devider-10"></div>
      <a href="#" class="red-button big">meer INFORMATIE</a>
    </div>
  </div>
</section>    

<section class="gray">
  <div class="inner">
    <div class="td-1">
      <img src="<?php echo get_template_directory_uri(); ?>/images/image-1.png" alt="image"  />
    </div>
    <div class="td-2 big-text">
      <h2>Google Business View</h2>
      <h3 class="turquoise">Zes redenen voor een Google Business View</h3>
      <div class="space-devider-20"></div>
      <p>
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium. totam rem aperiam.
      </p>
      
      <div class="space-devider-10"></div>
      <a href="#" class="red-button big">meer INFORMATIE</a>
    </div>
  </div>
</section>  

<section class="">
  <div class="inner">
    <div class="td-3">
      <img src="<?php echo get_template_directory_uri(); ?>/images/image-2.png" alt="image"  />
    </div>
    <div class="td-4 big-text">
      <h2>360º fotografie</h2>
      <h3 class="turquoise">Zes redenen voor een Google Business View </h3>
      <div class="space-devider-20"></div>
      <p>
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium. totam rem aperiam.
      </p>
      
      <div class="space-devider-10"></div>
      <a href="#" class="red-button big">meer INFORMATIE</a>
    </div>
  </div>
</section>  




<section class="tc turquoise">
  <div class="inner">
  
  <div class="tc-centered">
  <h2>Ook geïnteresseerd in Business View voor uw bedrijf?</h2>
  <h3>Vraag dan geheel vrijblijvend een offerte aan </h3>
  
 
  
  <div class="nc-form">
    <div class="row">
 <div class="first-input"><input type="text" placeholder="Naam" /></div>
 <div class="second-input"><input type="text" placeholder="Bedrijf" /></div>
</div>

<div class="row">
 <div class="first-input"><input type="tel" placeholder="Telefoon" /></div>
 <div class="second-input"><input type="email" placeholder="E-mailadres" /></div>
</div>

<div class="row">
<textarea placeholder="Bericht">
</textarea>
</div>

<div class="submit"><a href="#" class="red-button full big">VERZENDEN</a></div>

  </div>
  
  </div>  
  </div>
</section>



<?php } ?>
    
  
    
    

<?php  get_footer(); ?>