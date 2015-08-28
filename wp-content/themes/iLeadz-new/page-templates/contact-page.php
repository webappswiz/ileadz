<?php
/**
 * Template Name: Contact Page Template
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


 <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script>


function initialize() {
  var ileadz = new google.maps.LatLng(53.204250, 6.590039);
  var mapOptions = {
    zoom: 16,
    center: ileadz,
    scrollwheel: false,
	mapMaker: true,
    styles: [{"featureType":"water","stylers":[{"visibility":"on"},{"color":"#b5cbe4"}]},{"featureType":"landscape","stylers":[{"color":"#efefef"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#83a5b0"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#bdcdd3"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#e3eed3"}]},{"featureType":"administrative","stylers":[{"visibility":"on"},{"lightness":33}]},{"featureType":"road"},{"featureType":"poi.park","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":20}]},{},{"featureType":"road","stylers":[{"lightness":20}]}]
  }




  var map = new google.maps.Map(document.getElementById('map'), mapOptions);
  
var marker = new google.maps.Marker({
      position: ileadz,
      map: map,
      title: 'iLeadz'
  });
 
}

google.maps.event.addDomListener(window, 'load', initialize);


</script>
<!--
     <section class="map">
        <div id="map"></div>
    </section>
-->
<section class="map">
  <iframe width="100%" height="460" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Mediacentrale%20Helperpark%20270-298%209723%20ZA%20Groningen&key=AIzaSyAzfCS1ia2LWyWxTi2QBcsuVzyTghSPM5Y" allowfullscreen></iframe> 
</section>


    
     <?php if ( have_posts() ) the_post(); if(get_the_content()) { the_content(); }  else { ?>
     
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
<form action="http://ileadz.webappswiz.com/bedankt/" method="post">
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