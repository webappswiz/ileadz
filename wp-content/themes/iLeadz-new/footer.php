<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
         <div class="inner">
			 <div class="footer-image">
               <?php $bottom_footer = get_option('bottom_footer', ''); ?>
                        <?php if($bottom_footer != '') { ?>
                          <img src="<?php echo $bottom_footer; ?>"/>
                        <?php } else { ?>
                           <img src="<?php echo get_template_directory_uri(); ?>/images/footer-img.jpg" alt="image"  />
                        <?php } ?>
              
             </div>
             <div class="footer-contact">
               <?php if ( is_active_sidebar( 'sidebar-2' ) )  dynamic_sidebar( 'sidebar-2' ); else { ?> 
               <aside id="text-2" class="widget widget_text">
                <h3 class="widget-title">Contactgegevens</h3>
                <div class="textwidget">
                Mediacentrale (5e verdieping)<br />
Helperpark 292<br />
9723 ZA  Groningen<br />
<br />
Telefoon: 050 2102820<br />
E-mail: <a href="emailto:info@ileadz.nl">info@ileadz.nl</a></div>
		</aside>
        
              <?php } ?>
        
             </div>
             <div class="footer-social">
            
                <h3 class="widget-title">Social media</h3>
          
               <div style="margin-top:15px; float:left;" class="tw-block">


<a class="twitter-timeline" href="https://twitter.com/iLeadz" data-widget-id="635808772632498176" data-tweet-limit="1" data-chrome="nofooter noborders noscrollbar noheader transparent"  data-src-2x="false" >Tweets door @iLeadz</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            
               </div>
               
               
             </div>
             
             </div>
		</div><!-- .site-info -->
        <div class="site-bottom">
          <div class="inner"><span>Copyright &copy; 2015 iLeadz Internet Marketing</span>
          <div class="footer-logo">  
		  <?php if ( is_active_sidebar( 'footer-icons' ) )  dynamic_sidebar( 'footer-icons' ); else { ?> 
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/f1.jpg" alt="image"  /></a>
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/f2.jpg" alt="image"  /></a>
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/f3.jpg" alt="image"  /></a>
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/f4.jpg" alt="image"  /></a>
            
              <?php } ?>
          </div>
          </div>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


<!-- #Popups -->






<section style="display:none">

<!-- #Pakket aanvragen -->

<div class="pakket" id="pakket-1">
<form action="<?php echo get_bloginfo('url');?>/bedankt-klein/" method="post">
<h2>Pakket aanvragen</h2>

<div class="pakket-desc"><?php if(get_option('klein_text','') == '') { ?> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <?php } else  echo get_option('klein_text','');?> </div>

<div class="row select-row">
  <div class="select-align">
    <div class="stext">Kies een pakket: </div>
    <label>
    <select name="pack[]">
      <option selected value="Klein">Klein pakket</option>
      <option value="Medium">Medium pakket</option>
      <option value="Groot">Groot pakket</option>
      <option value="Maat">Maat pakket</option>
    </select>
    </label>
  </div>
</div>

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
<input type="hidden" name="footer-submitted" value="1" />
</form>
</div>

<div class="pakket" id="pakket-2">
<form action="<?php echo get_bloginfo('url');?>/bedankt-medium/" method="post">
<h2>Pakket aanvragen</h2>

<div class="pakket-desc"><?php if(get_option('medium_text','') == '') { ?> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <?php } else  echo get_option('medium_text','');?> </div>

<div class="row select-row">
  <div class="select-align">
    <div class="stext">Kies een pakket: </div>
    <label>
    <select name="pack[]">
      <option  value="Klein">Klein pakket</option>
      <option selected value="Medium">Medium pakket</option>
      <option value="Groot">Groot pakket</option>
      <option value="Maat">Maat pakket</option>
    </select>
    </label>
  </div>
</div>

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
<input type="hidden" name="footer-submitted" value="1" />
</form>
</div>

<div class="pakket" id="pakket-3">
<form action="<?php echo get_bloginfo('url');?>/bedankt-groot/" method="post">
<h2>Pakket aanvragen</h2>

<div class="pakket-desc"><?php if(get_option('groot_text','') == '') { ?> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <?php } else  echo get_option('groot_text','');?> </div>

<div class="row select-row">
  <div class="select-align">
    <div class="stext">Kies een pakket: </div>
    <label>
    <select name="pack[]">
      <option value="Klein">Klein pakket</option>
      <option value="Medium">Medium pakket</option>
      <option selected value="Groot">Groot pakket</option>
      <option value="Maat">Maat pakket</option>
    </select>
    </label>
  </div>
</div>

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
<input type="hidden" name="footer-submitted" value="1" />
</form>
</div>

<div class="pakket" id="pakket-4">
<form action="<?php echo get_bloginfo('url');?>/bedankt-maat/" method="post">
<h2>Pakket aanvragen</h2>

<div class="pakket-desc"><?php if(get_option('maat_text','') == '') { ?> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <?php } else  echo get_option('maat_text','');?> </div>

<div class="row select-row">
  <div class="select-align">
    <div class="stext">Kies een pakket: </div>
    <label>
    <select name="pack">
      <option value="Klein">Klein pakket</option>
      <option value="Medium">Medium pakket</option>
      <option value="Groot">Groot pakket</option>
      <option selected value="Maat">Maat pakket</option>
    </select>
    </label>
  </div>
</div>

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
<input type="hidden" name="footer-submitted" value="1" />
</form>
</div>

<!-- #Maak -->

<div class="pakket" id="pakket-bottom">
<form action="<?php echo get_bloginfo('url');?>/bedankt/" method="post">
<h2>Maak een afspraak</h2>

<div class="pakket-desc"><?php if(get_option('maak_text','') == '') { ?> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <?php } else  echo get_option('maak_text','');?> </div>

<p>&nbsp;</p>

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
<input type="hidden" name="footer-submitted" value="1" />
</form>
</div>


</section>

<div id="go-top"></div>



<script src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.placeholder.1.3.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js"></script>
<script>


$(document).ready(function(){
	
	
	
	
	$(".submit a").on('click',function(e) {
		e.preventDefault(); 
		
		 $(this).closest('form').submit(); 
	});
	
	
	$(".tfp-first a").on('click',function(e) {
		e.preventDefault();
		 $(this).closest('form').submit(); 
	});
	
	
	
	
	
    $.Placeholder.init();
	
	$("#top-face-popup form").validate({
		 messages:{

            naam:{required: "This field is required",},
            emailadres:{required: "invalid email",},
			

       },
	     submitHandler: function(form) {
         
		    $('#top-face-popup .tfp-first').slideUp(800);
	  $('#top-face-popup .tfp-second').slideDown(800);
	
	     $('.tfp-second a').on('click', function(event){
	     event.preventDefault();
	      form.submit();
                });
				
  
             }
    });
	
    $(".nc-form form").validate({
		 messages:{

            naam:{required: "This field is required",},
            emailadres:{required: "invalid email",},
			bericht:{required: "This field is required",},

       }
    });
	
	$("#pakket-bottom form").validate({
		 messages:{

            naam:{required: "This field is required",},
            emailadres:{required: "invalid email",},
			bericht:{required: "This field is required",},

       }
    });
	$(".pakket form").validate({
		 messages:{

            naam:{required: "This field is required",},
            emailadres:{required: "invalid email",},
			bericht:{required: "This field is required",},

       }
    });
	
	
	
	
var stickyNavTop = $('#site-top').offset().top;
 
var stickyNav = function(){
	
var scrollTop = $(window).scrollTop();
      
if (scrollTop > stickyNavTop) { 
    $('#site-top-block').addClass('sticky');
	
} else {
    $('#site-top-block').removeClass('sticky'); 
	
}

};
 
stickyNav();

$(document).on('scroll',function() {
	
	if($('html').height() > 1000) {
	
	stickyNav();	
	scrollTop = $(window).scrollTop();	
	$('body').addClass('scrolled');
	
	
	 if (scrollTop < 1) {	$('body').removeClass('scrolled');  }
	
	
	}

}); /* scroll */


});

 if($("#go-top").css('opacity') =="0") { 
  if($("#site-navi li.special  #spec-menu").length) {} else $('#site-navi li.special a').after($('#spec-menu'));
} 



$( window ).resize(function() {
if($("#go-top").css('opacity') =="0") {
  if($("#site-navi li.special  #spec-menu").length) {} else $('#site-navi li.special a').after($('#spec-menu'));
}
else {
	if($("#site-navi li.special  #spec-menu").length) $('#site-top').after($('#spec-menu'));
}

});




console.log($("#go-top").css('opacity'));


</script>


<?php 
 global $post;
 $object_id = get_queried_object_id();
  
$menu_object_1 = wp_get_nav_menu_items("Special-1");
$menu_items_1 = wp_list_pluck( $menu_object_1, 'object_id' );
$menu_object_2 = wp_get_nav_menu_items("Special-2");
$menu_items_2 = wp_list_pluck( $menu_object_2, 'object_id' );
$menu_object_3 = wp_get_nav_menu_items("Special-3");
$menu_items_3 = wp_list_pluck( $menu_object_3, 'object_id' );
$menu_object_4 = wp_get_nav_menu_items("Special-4");
$menu_items_4 = wp_list_pluck( $menu_object_4, 'object_id' );


$menu_items = array_merge($menu_items_1, $menu_items_2, $menu_items_3, $menu_items_4);


 
if(in_array( (int) $object_id, $menu_items )) {
 
?>

<script>
 $('#site-navi li.special').addClass('current-menu-item');
 $('.breadcrumbs .inner > span').prepend('<a href="<?php echo get_permalink($object_id);?>">Diensten</a> / ');
</script>


<?php 
}
?>


<div id="custom-overlay"></div>
</body>
</html>