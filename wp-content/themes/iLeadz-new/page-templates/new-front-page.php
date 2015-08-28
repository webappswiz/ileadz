<?php
/**
 * Template Name: New Front Page Template
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

get_header(); ?>

     <?php if ( have_posts() ) the_post(); if(get_the_content()) { the_content(); }  else { ?>
    
<section id="goe">
  <div class="inner">
   <h2 class="centered"><b>Goedemorgen.</b> Waarmee kunnen wij je van dienst zijn?</h2>
   
     <ul class="goe_table">
       <li class="goe_block">
         <div class="goe-img goe-img-1"></div>
         <div class="goe-title">Maak mijn website vindbaar</div>
         <div class="goe-desc">Potentiële klanten, cliënten of patiënten willen weten hoe uw bedrijf eruit ziet.</div>
         <div class="goe-link"><a href="#">Meer informatie</a></div>
       </li>
       
       <li class="goe_block">
         <div class="goe-img goe-img-2"></div>
         <div class="goe-title">Verkoop mijn producten</div>
         <div class="goe-desc">Potentiële klanten, cliënten of patiënten willen weten hoe uw bedrijf eruit ziet.</div>
         <div class="goe-link"><a href="#">Meer informatie</a></div>
       </li>
       
       <li class="goe_block">
         <div class="goe-img goe-img-3"></div>
         <div class="goe-title">Verbeter mijn website</div>
         <div class="goe-desc">Potentiële klanten, cliënten of patiënten willen weten hoe uw bedrijf eruit ziet.</div>
         <div class="goe-link"><a href="#">Meer informatie</a></div>
       </li>
       
       <li class="goe_block">
         <div class="goe-img goe-img-4"></div>
         <div class="goe-title">Breng mijn bedrijf in beeld</div>
         <div class="goe-desc">Potentiële klanten, cliënten of patiënten willen weten hoe uw bedrijf eruit ziet.</div>
         <div class="goe-link"><a href="#">Meer informatie</a></div>
       </li>
     </ul>
     
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

<section class="gray">
  <div class="inner">
    <div class="td-1">
      <img src="<?php echo get_template_directory_uri(); ?>/images/image-3.png" alt="image"  />
    </div>
    <div class="td-2 big-text">
      <h2>Productfotografie</h2>
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


<section class="vele">
  <div class="inner">
    <h2 class="centered">Vele bedrijven gingen u voor</h2>
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

<section class="categories gray">
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

<section class="maak">
 <div class="inner">
  <p>Ontdek vrijblijvend de mogelijkheden van Google Business View voor uw bedrijf</p>
  <p>Bel ons via <b>050 2102820</b> of <a id="various1" href="#pakket-bottom">maak een afspraak</a></p>
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




    
    
	<?php } ?>
    
    

<?php  get_footer(); ?>