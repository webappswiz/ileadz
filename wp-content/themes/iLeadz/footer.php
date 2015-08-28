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
            <?php if ( is_active_sidebar( 'sidebar-2' ) )  dynamic_sidebar( 'sidebar-2' ); else { ?> 
               <aside id="text-2" class="widget widget_text">
                <h3 class="widget-title">Social media</h3>
                <div class="textwidget"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt="image"  /></a>
               <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/fb.png" alt="image"  /></a>
               <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/call.png" alt="image"  /></a>
		</aside>
        
              <?php } ?>
               
             </div>
             
             </div>
		</div><!-- .site-info -->
        <div class="site-bottom">
          <div class="inner">Copyright &copy; 2015 iLeadz Internet Marketing
          <div class="footer-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/footer-logo.png" alt="image"  /></div>
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
    $('#site-top').addClass('sticky');
} else {
    $('#site-top').removeClass('sticky'); 
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
</script>


<div id="custom-overlay"></div>
</body>
</html>