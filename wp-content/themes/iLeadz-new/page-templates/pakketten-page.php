<?php
/**
 * Template Name: Pakketten Page Template
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
    
<section>
  <div class="inner">
    <h1 class="centered">De zichtbaarheid van uw bedrijf vergroten door middel van een visuele tour met Google Business View.</h1>
    <div class="text centered">
    
       iLeadz Internet Marketing is de juiste partner als het op een Google Business View shoot aankomt. Naast het maken van Google business view shoots hebben wij namelijk een ruime ervaring in online marketing.<br />
Wij kunnen voor u 360-graden panorama foto-opnamen van uw bedrijf laten maken. Hierdoor wordt er een gemakkelijk te gebruiken interactieve tour gecreëerd die 24 uur per dag kan worden gezien overal op de wereld.
    
    </div>
  </div>
</section> 


<section class="vele gray">
  <div class="inner">
    <h2 class="centered">Veel bedrijven gebruiken Business View</h2>
    <h4 class="centered">Bekijk hier de nieuwste voorbeelden</h4>
    
    <div class="tree-img">
      <a class="image-link" href="#">
          <img src="<?php echo get_template_directory_uri(); ?>/images/image-4.jpg" alt="image"  />
         <div class="img-hover-desc">
           <div class="img-hover-title">De Blauwe Boerderij</div>
           <div class="img-hover-text">22 mei 2015</div>
         </div>
      </a>
      <a class="image-link" href="#">
          <img src="<?php echo get_template_directory_uri(); ?>/images/image-5.jpg" alt="image"  />
         <div class="img-hover-desc">
           <div class="img-hover-title">De Blauwe Boerderij</div>
           <div class="img-hover-text">22 mei 2015</div>
         </div>
      </a>
      <a class="image-link" href="#">
          <img src="<?php echo get_template_directory_uri(); ?>/images/image-6.jpg" alt="image"  />
         <div class="img-hover-desc">
           <div class="img-hover-title">De Blauwe Boerderij</div>
           <div class="img-hover-text">22 mei 2015</div>
         </div>
      </a>
    </div>
    
  </div>
</section>

<section class="pakketten">
  <div class="inner">
    <h2 class="centered">Google Business View pakketten</h2>
    <h4 class="centered">Kies het geschikte Google Business View pakket dat bij uw bedrijf past</h4>
    
   
<ul class="pricing_table">
      
      <li class="price_block">
    
        <div class="price">
         <div class="price-cell">
          <h3>Klein pakket</h3>
          <span class="price_number">Eenmalig € 249,-</span> 
         </div>     
        </div>
        <ul class="features">
           <li>Tot 15 panoramafoto’s</li>
           <li>Geschikt voor  ± 300m<sup>2</sup></li>
           <li>Geschikt voor 2 tot 3 ruimtes</li>
           <li>Incl. 15 bedrijfsfoto’s</li>
           <li>Integratie Google Streetview</li>
           <li>Google+ pagina optimalisatie</li>
           <li>Handleiding implementatie </li>
           <li>Eigen website</li>
           <li>Implementatie Facebook pagina</li>
           
        </ul>
        <div class="price-footer">
               <a id="various-pak-1" href="#pakket-1" class="red-button">aanvragen</a>
        </div>
        
         <div class="price-block-desc">Popualaire keuze! 60% ...</div>
    </li>
     
    <li class="price_block active">
    
        <div class="price">
         <div class="price-cell">
          <h3>Medium pakket</h3>
          <span class="price_number">Eenmalig € 449,-</span> 
         </div>     
        </div>
        <ul class="features">
           <li>Tot 15 panoramafoto’s</li>
           <li>Geschikt voor  ± 300m<sup>2</sup></li>
           <li>Geschikt voor 2 tot 3 ruimtes</li>
           <li>Incl. 15 bedrijfsfoto’s</li>
           <li>Integratie Google Streetview</li>
           <li>Google+ pagina optimalisatie</li>
           <li>Handleiding implementatie </li>
           <li>Eigen website</li>
           <li>Implementatie Facebook pagina</li>
           
        </ul>
        <div class="price-footer">
               <a id="various-pak-2" href="#pakket-2" class="red-button">aanvragen</a>
        </div>
        
        <div class="price-block-desc">Popualaire keuze! 90% ...</div>
    </li>
     
    <li class="price_block">
    
        <div class="price">
         <div class="price-cell">
          <h3>Groot pakket</h3>
          <span class="price_number">Eenmalig € 699,-</span> 
         </div>     
        </div>
        <ul class="features">
           <li>Tot 15 panoramafoto’s</li>
           <li>Geschikt voor  ± 300m<sup>2</sup></li>
           <li>Geschikt voor 2 tot 3 ruimtes</li>
           <li>Incl. 15 bedrijfsfoto’s</li>
           <li>Integratie Google Streetview</li>
           <li>Google+ pagina optimalisatie</li>
           <li>Handleiding implementatie </li>
           <li>Eigen website</li>
           <li>Implementatie Facebook pagina</li>           
        </ul>
        <div class="price-footer">
               <a id="various-pak-3" href="#pakket-3" class="red-button">aanvragen</a>
        </div>
        
        <div class="price-block-desc right">Popualaire keuze! 50% ...</div>
    </li>
    <li class="price_block">
    
        <div class="price">
         <div class="price-cell">
          <h3>Maat pakket</h3>
          <span class="price_number">Prijs op aanvraag</span> 
         </div>     
        </div>
        <ul class="features">
           <li>Tot 15 panoramafoto’s</li>
           <li>Geschikt voor  ± 300m<sup>2</sup></li>
           <li>Geschikt voor 2 tot 3 ruimtes</li>
           <li>Incl. 15 bedrijfsfoto’s</li>
           <li>Integratie Google Streetview</li>
           <li>Google+ pagina optimalisatie</li>
           <li>Handleiding implementatie </li>
           <li>Eigen website</li>
           <li>Implementatie Facebook pagina</li>
           
        </ul>
        <div class="price-footer">
               <a id="various-pak-4" href="#pakket-4" class="red-button">aanvragen</a>
        </div>
        
        <div class="price-block-desc right">Popualaire keuze! 30% ...</div>
    </li>
</ul>
   
      <div class="pak-bottom">Als u een van de bovenstaande pakketten heeft gekozen, zal een gecertificeerde vertegenwoordiger
van iLeadz Internet Marketing uw fotoshoot met u plannen.</div> 
    
    
  </div>
</section>

<section class="maak">
 <div class="inner">
  <p>Ontdek vrijblijvend de mogelijkheden van Google Business View voor uw bedrijf</p>
  <p>Bel ons via <b>050 2102820</b> of <a id="various1" href="#pakket-bottom">maak een afspraak</a></p>
 </div>
</section>

<section class="categories">
  <div class="inner">
    <h2 class="centered">Google Business View</h2>
    <h4 class="centered">Zes redenen voor een Google Business View</h4>
    
    <div class="cat-blocks">
      <div class="cat-block">
         <div class="cat-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/cat-icon.png" alt="image"  /></div>
         <h3 class="cat-title"><a href="#">What you see...</a></h3>
         <div class="cat-text">
           Potentiële klanten, cliënten of patiënten willen weten hoe uw bedrijf eruit ziet. Het is verstandig om mensen te laten weten wat ze te wachten staat.
         </div>
      </div>
      
      <div class="cat-block">
         <div class="cat-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/cat-icon.png" alt="image"  /></div>
         <h3 class="cat-title"><a href="#">Fotoshoot</a></h3>
         <div class="cat-text">
           De fotoshoot kan meer mensen aanmoedigen om door te klikken naar uw Places pagina of website.
         </div>
      </div>
      
      <div class="cat-block">
         <div class="cat-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/cat-icon.png" alt="image"  /></div>
         <h3 class="cat-title"><a href="#">Vindbaar</a></h3>
         <div class="cat-text">
           Een Google Business View vergroot uw online vindbaarheid waardoor u zichtbaar bent voor een grotere doelgroep.
         </div>
      </div>
      
      <div class="cat-block">
         <div class="cat-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/cat-icon.png" alt="image"  /></div>
         <h3 class="cat-title"><a href="#">Kanalen</a></h3>
         <div class="cat-text">
           U kunt de fotoshoot gemakkelijk op uw site en op facebook insluiten. Zo kunt u de Google Business View op meerdere kanalen weergeven.
         </div>
      </div>
      
      <div class="cat-block">
         <div class="cat-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/cat-icon.png" alt="image"  /></div>
         <h3 class="cat-title"><a href="#">Fotograaf</a></h3>
         <div class="cat-text">
           Iemand anders neemt de tijd om foto's te nemen. Dat bespaart u tijd. Om goede foto's te laten maken heeft u bovendien een professionele fotograaf nodig.
         </div>
      </div>
      
      <div class="cat-block">
         <div class="cat-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/cat-icon.png" alt="image"  /></div>
         <h3 class="cat-title"><a href="#">Laat je zien</a></h3>
         <div class="cat-text">
           Bij een Google Business View shoot worden meerdere bedrijfsfoto's gemaakt. U kunt deze losse bedrijfsfoto’s elders hergebruiken op uw site. 
         </div>
      </div>
      
      
    </div>
    
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