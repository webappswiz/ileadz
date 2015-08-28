<?php
/**
 * Template Name: Ons Page Template
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

get_header('pakketten'); ?>

     <?php if ( have_posts() ) the_post(); if(get_the_content()) { the_content(); }  else { ?>
    




<section class="team">
  <div class="inner">
    <h2 class="centered">Ons team</h2>
    <h4 class="centered">Zes redenen voor een Google Business View</h4>
    
    <div class="cat-blocks">
      <div class="cat-block">
         <div class="cat-icon"><img src="http://ileadz.webappswiz.com/wp-content/themes/iLeadz-new/images/team-image.jpg" alt="image"></div>
         <h3 class="cat-title">Richard Wobbes</h3>
         <div class="cat-text">
           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
         </div>
         <div class="cat-email">
           E-mail: <a href="mailto:richard@ileadz.nl">richard@ileadz.nl</a>
         </div>
         
         
      </div>
      
     <div class="cat-block">
         <div class="cat-icon"><img src="http://ileadz.webappswiz.com/wp-content/themes/iLeadz-new/images/team-image.jpg" alt="image"></div>
         <h3 class="cat-title">Richard Wobbes</h3>
         <div class="cat-text">
           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
         </div>
         <div class="cat-email">
           E-mail: <a href="mailto:richard@ileadz.nl">richard@ileadz.nl</a>
         </div>
         
         
      </div>
      
      <div class="cat-block">
         <div class="cat-icon"><img src="http://ileadz.webappswiz.com/wp-content/themes/iLeadz-new/images/team-image.jpg" alt="image"></div>
         <h3 class="cat-title">Richard Wobbes</h3>
         <div class="cat-text">
           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
         </div>
         <div class="cat-email">
           E-mail: <a href="mailto:richard@ileadz.nl">richard@ileadz.nl</a>
         </div>
         
         
      </div>
      
      <div class="cat-block">
         <div class="cat-icon"><img src="http://ileadz.webappswiz.com/wp-content/themes/iLeadz-new/images/team-image.jpg" alt="image"></div>
         <h3 class="cat-title">Richard Wobbes</h3>
         <div class="cat-text">
           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
         </div>
         <div class="cat-email">
           E-mail: <a href="mailto:richard@ileadz.nl">richard@ileadz.nl</a>
         </div>
         
         
      </div>
      
      <div class="cat-block">
         <div class="cat-icon"><img src="http://ileadz.webappswiz.com/wp-content/themes/iLeadz-new/images/team-image.jpg" alt="image"></div>
         <h3 class="cat-title">Richard Wobbes</h3>
         <div class="cat-text">
           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
         </div>
         <div class="cat-email">
           E-mail: <a href="mailto:richard@ileadz.nl">richard@ileadz.nl</a>
         </div>
         
         
      </div>
      
      <div class="cat-block">
         <div class="cat-icon"><img src="http://ileadz.webappswiz.com/wp-content/themes/iLeadz-new/images/team-image.jpg" alt="image"></div>
         <h3 class="cat-title">Richard Wobbes</h3>
         <div class="cat-text">
           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
         </div>
         <div class="cat-email">
           E-mail: <a href="mailto:richard@ileadz.nl">richard@ileadz.nl</a>
         </div>
         
         
      </div>
      
      
    </div>
    
  </div>
</section>



<section class="categories gray">
  <div class="inner">
    <h2 class="centered">Waarom ons</h2>
    <h4 class="centered">Zes redenen waarom je voor iLeadz moet kiezen</h4>
    
    <div class="cat-blocks">
      <div class="cat-block">
         <div class="cat-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/cat-icon-1.png" alt="image"  /></div>
         <h3 class="cat-title"><a href="#">Ervaring</a></h3>
         <div class="cat-text">
           Wij hebben meer dan 10 jaar ervaring in online marketing. 
         </div>
      </div>
      
      <div class="cat-block">
         <div class="cat-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/cat-icon-2.png" alt="image"  /></div>
         <h3 class="cat-title"><a href="#">Advies op maat</a></h3>
         <div class="cat-text">
           Advies op maat, elke klant heeft zijn of haar eigen verhaal. 

         </div>
      </div>
      
      
      
      <div class="cat-block">
         <div class="cat-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/cat-icon-3.png" alt="image"  /></div>
         <h3 class="cat-title"><a href="#">Klant staat centraal</a></h3>
         <div class="cat-text">
           Onze klanten staan centraal, wij luisteren naar jouw wensen. 
         </div>
      </div>
      <div class="cat-block">
         <div class="cat-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/cat-icon-4.png" alt="image"  /></div>
         <h3 class="cat-title"><a href="#">Kennis</a></h3>
         <div class="cat-text">
           Wij bieden een breed pakket, van adviseren tot en met visualiseren. 
         </div>
      </div>
      <div class="cat-block">
         <div class="cat-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/cat-icon-5.png" alt="image"  /></div>
         <h3 class="cat-title"><a href="#">Meer conversie</a></h3>
         <div class="cat-text">
           Vanuit onze expertise zorgen wij voor meer conversie. 
         </div>
      </div>
      
      <div class="cat-block">
         <div class="cat-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/cat-icon-6.png" alt="image"  /></div>
         <h3 class="cat-title"><a href="#">E-commerce</a></h3>
         <div class="cat-text">
           iLeadz internet marketing is dé specialist in e-commerce.
         </div>
      </div>
      
      
    </div>
    
  </div>
</section>

<section class="maak">
 <div class="inner">
  <p>Ontdek vrijblijvend de mogelijkheden van Google Business View voor uw bedrijf</p>
  <p>Bel ons via <b>050 2102820</b> of <a id="various1" href="#pakket-bottom">maak een afspraak</a></p>
 </div>
</section>

<section class="deel gray">
  <div class="inner">
    <div class="td-4 big-text">
      <h2>Deel uw bedrijf met de wereld!</h2>
      <h3 class="turquoise">Zes redenen voor een Google Business View</h3>
      <div class="space-devider-20"></div>
      <p>
        Nadat uw visuele tour gelinkt is aan uw Google+ account, zult u in staat zijn om uw bedrijf te presenteren aan de wereld. Met Google Business View zullen potentiële klanten u sneller vinden. Wij van iLeadz bieden bovendien een volledige waaier van professionele diensten aan, om u te helpen bij het genereren van online verkoop, website ontwikkeling en online marketing behoeften.
      </p>
    </div>
  </div>
</section>





<section>
  <div class="inner">
    <div class="td-1">
      <img src="<?php echo get_template_directory_uri(); ?>/images/image-4.png" alt="image"  />
    </div>
    <div class="td-2 big-text">
      <h2>Over iLeadz</h2>
      <h3 class="turquoise">Zes redenen voor een Google Business View</h3>
      <div class="space-devider-20"></div>
      <p>
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium. totam rem aperiam.
      </p>
      
      <div class="space-devider-10"></div>
      <a href="#" class="red-button big">NAAR ILEADZ.NL</a>
    </div>
  </div>
</section>   



<section class="nc gray">
  <div class="inner">
  
  <div class="nc-centered">
  <h2>Neem contact met ons op</h2>
  <h3>Zes redenen voor een Google Business View </h3>
  
  <div class="col-1">
   Mediacentrale (5e verdieping)<br />
Helperpark 292<br />
9723 ZA  Groningen
  </div>
  <div class="col-2">
   Telefoon: 050 2102820 <br />
   E-mail: <a href="mailto:info@ileadz.nl">info@ileadz.nl</a>
  </div>
  
  
  <div class="nc-form">
  <form action="<?php echo get_bloginfo('url');?>/bedankt/" method="post">
    <div class="row">
 <div class="first-input"><input type="text" placeholder="Naam" name="naam" required="required" /></div>
 <div class="second-input"><input type="text" placeholder="Bedrijf" name="bedrijf" /></div>
</div>

<div class="row">
<div class="first-input"><input type="tel" name="telefoon" placeholder="Telefoon" /></div>
 <div class="second-input"><input type="email" name="emailadres" placeholder="E-mailadres" required="required" /></div>
</div>

<div class="row">
<textarea placeholder="Bericht" name="bericht" required="required">
</textarea>
</div>

<div class="submit"><a href="#" class="red-button full big">VERZENDEN</a></div>
</form>
  </div>
  
  </div>  
  </div>
</section>
    
    
	<?php } ?>
    


<?php  get_footer(); ?>