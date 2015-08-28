<?php
add_action('admin_menu', 'tetheme__admin_menu'  ); 
function tetheme__admin_menu() {
	add_menu_page( "Theme Options", "Theme Options", "manage_options", 'te-theme-options',  'te__settings'); 
	
}
   	

function te__settings(){
	add_thickbox();
        
        if ($_POST['save_gateway_settings']) {
			update_option('maak_text', $_POST['maak_text']);
			update_option('klein_text', $_POST['klein_text']);
            update_option('medium_text', $_POST['medium_text']);
            update_option('groot_text', $_POST['groot_text']);
            update_option('maat_text', $_POST['maat_text']);
			
            update_option('logo_img', $_POST['logo_img']);
			update_option('facebook_url', $_POST['facebook_url']);
			update_option('pinterest_url', $_POST['pinterest_url']);
			update_option('instagram_url', $_POST['instagram_url']);
			update_option('google_url', $_POST['google_url']);
			update_option('twitter_url', $_POST['twitter_url']);
			update_option('first_slider_img', $_POST['first_slider_img']);
			update_option('first_slider_text', htmlentities(stripslashes($_POST['first_slider_text']), ENT_QUOTES));
			update_option('second_slider_img', $_POST['second_slider_img']);
			update_option('second_slider_text', htmlentities(stripslashes($_POST['second_slider_text']), ENT_QUOTES));
			update_option('third_slider_img', $_POST['third_slider_img']);
			update_option('third_slider_text', htmlentities(stripslashes($_POST['third_slider_text']), ENT_QUOTES));
			update_option('fourth_slider_img', $_POST['fourth_slider_img']);
			update_option('fourth_slider_text', htmlentities(stripslashes($_POST['fourth_slider_text']), ENT_QUOTES));
			update_option('fifth_slider_img', $_POST['fifth_slider_img']);
			update_option('fifth_slider_text', htmlentities(stripslashes($_POST['fifth_slider_text']), ENT_QUOTES));
			update_option('sixth_slider_img', $_POST['sixth_slider_img']);
			update_option('sixth_slider_text', htmlentities(stripslashes($_POST['sixth_slider_text']), ENT_QUOTES));
			update_option('bottom_footer', $_POST['bottom_footer']);
			update_option('amenities_img', $_POST['amenities_img']);
			update_option('contact_img', $_POST['contact_img']);
			update_option('experience_img', $_POST['experience_img']);
			update_option('location_img', $_POST['location_img']);
			update_option('floor_img', $_POST['floor_img']);
			
			update_option('first_slider_text_left_1', htmlentities(stripslashes($_POST['first_slider_text_left_1']), ENT_QUOTES));
			update_option('first_slider_text_left_2', htmlentities(stripslashes($_POST['first_slider_text_left_2']), ENT_QUOTES));
			update_option('second_slider_text_left_1', htmlentities(stripslashes($_POST['second_slider_text_left_1']), ENT_QUOTES));
			update_option('second_slider_text_left_2', htmlentities(stripslashes($_POST['second_slider_text_left_2']), ENT_QUOTES));
			update_option('third_slider_text_left_1', htmlentities(stripslashes($_POST['third_slider_text_left_1']), ENT_QUOTES));
			update_option('third_slider_text_left_2', htmlentities(stripslashes($_POST['third_slider_text_left_2']), ENT_QUOTES));
			update_option('fourth_slider_text_left_1', htmlentities(stripslashes($_POST['fourth_slider_text_left_1']), ENT_QUOTES));
			update_option('fourth_slider_text_left_2', htmlentities(stripslashes($_POST['fourth_slider_text_left_2']), ENT_QUOTES));
			update_option('fifth_slider_text_left_1', htmlentities(stripslashes($_POST['fifth_slider_text_left_1']), ENT_QUOTES));
			update_option('fifth_slider_text_left_2', htmlentities(stripslashes($_POST['fifth_slider_text_left_2']), ENT_QUOTES));
			update_option('sixth_slider_text_left_1', htmlentities(stripslashes($_POST['sixth_slider_text_left_1']), ENT_QUOTES));
			update_option('sixth_slider_text_left_2', htmlentities(stripslashes($_POST['sixth_slider_text_left_2']), ENT_QUOTES));
			
			update_option('footer_email', $_POST['footer_email']);
			update_option('service_email', $_POST['service_email']);
			update_option('friend_email', $_POST['friend_email']);
			
			
			
        }
		
		    
			
			
        $maak_text = get_option('maak_text','');
		 $klein_text = get_option('klein_text','');
		  $medium_text = get_option('medium_text','');
		   $groot_text = get_option('groot_text','');
		    $maat_text = get_option('maat_text','');
		
		
		
        $toptext    = get_option('toptext', 'There are places to hang your hat. And there are places to live.
Welcome to CanalSide Lofts, in downtown Columbia.');
        $phoneno = get_option('phoneno', '803.220.0337');
        $footer_address     = get_option('footer_address', '383 Taylor Street Columbia, SC 29201');
        $logo_img     = get_option('logo_img', '');
		$facebook_url = get_option('facebook_url', '');
		$pinterest_url = get_option('pinterest_url', '');
		$instagram_url  = get_option('instagram_url', '');
		$google_url  = get_option('google_url', '');
		$twitter_url = get_option('twitter_url', '');
		$first_slider_img = get_option('first_slider_img', '');
		$first_slider_text = get_option('first_slider_text', '');
		$second_slider_img = get_option('second_slider_img', '');
		$second_slider_text = get_option('second_slider_text', '');
		$third_slider_img = get_option('third_slider_img', '');
		$third_slider_text = get_option('third_slider_text', '');
		$fourth_slider_img = get_option('fourth_slider_img', '');
		$fourth_slider_text = get_option('fourth_slider_text', '');
		$fifth_slider_img = get_option('fifth_slider_img', '');
		$fifth_slider_text = get_option('fifth_slider_text', '');
		$sixth_slider_img = get_option('sixth_slider_img', '');
		$sixth_slider_text = get_option('sixth_slider_text', '');
		$bottom_footer = get_option('bottom_footer', '');
		$amenities_img= get_option('amenities_img', '');
		$contact_img= get_option('contact_img', '');
		$experience_img= get_option('experience_img', '');
		$location_img= get_option('location_img', '');
		$floor_img= get_option('floor_img', '');
		
		$first_slider_text_left_1 = get_option('first_slider_text_left_1', '');
		$first_slider_text_left_2 = get_option('first_slider_text_left_2', '');
		$second_slider_text_left_1 = get_option('second_slider_text_left_1', '');
		$second_slider_text_left_2 = get_option('second_slider_text_left_2', '');
		$third_slider_text_left_1 = get_option('third_slider_text_left_1', '');
		$third_slider_text_left_2 = get_option('third_slider_text_left_2', '');
		$fourth_slider_text_left_1 = get_option('fourth_slider_text_left_1', '');
		$fourth_slider_text_left_2 = get_option('fourth_slider_text_left_2', '');
		$fifth_slider_text_left_1 = get_option('fifth_slider_text_left_1', '');
		$fifth_slider_text_left_2 = get_option('fifth_slider_text_left_2', '');
		$sixth_slider_text_left_1 = get_option('sixth_slider_text_left_1', '');
		$sixth_slider_text_left_2 = get_option('sixth_slider_text_left_2', '');
		
		$footer_email= get_option('footer_email', '');
		$service_email= get_option('service_email', '');
		$friend_email= get_option('friend_email', '');
       
?>
       <div class="wrap">
<div id="icon-options-general" class="icon32"><br></div>
<h2>Theme Settings</h2>

<form method="post">


   <table class="form-table">
<tbody>


<tr valign="top">
   <th scope="row"><label>Footer Image here</label></th>
   <td>
		
			<div class="chaoscont">
				<label>Image: </label>
	            <input  type="text" value="<?php echo $bottom_footer;?>" id="bottom_footer" name="bottom_footer" class="text icon_url"> 
	            <input type="button" name="bottom_footer_img" id="bottom_footer_img" value="Select Image" class="image_btn button-secondary" />
	            <p style="margin:0px 0px 0px 145px; font-size:11px; font-style:italic;">(maximum size should be 500px * 340px)</p>  
			</div>
			
		
	</td>
</tr>




</tbody>
</table>

<h3 class="title">Popups</h3> 


   <table class="form-table">
<tbody>


<tr valign="top">
   <th scope="row"><label for="maak_text">maak een afspraak</label></th>
   <td><input name="maak_text" type="text" id="maak_text" value="<?php echo $maak_text;?>" class="regular-text code"></td>
</tr>
<tr valign="top">
   <th scope="row"><label for="maak_text">Klein</label></th>
   <td><input name="klein_text" type="text" id="klein_text" value="<?php echo $klein_text;?>" class="regular-text code"></td>
</tr>
<tr valign="top">
    <th scope="row"><label for="maak_text">Medium</label></th>
   <td><input name="medium_text" type="text" id="medium_text" value="<?php echo $medium_text;?>" class="regular-text code"></td>
</tr>
<tr valign="top">
  <th scope="row"><label for="groot_text">Groot</label></th>
   <td><input name="groot_text" type="text" id="groot_text" value="<?php echo $groot_text;?>" class="regular-text code"></td>
</tr>
<tr valign="top">
   <th scope="row"><label for="maat_text">Maat</label></th>
   <td><input name="maat_text" type="text" id="maat_text" value="<?php echo $maat_text;?>" class="regular-text code"></td>
</tr>


</tbody>
</table>


<!--


<h3 class="title">Form emails</h3> 


   <table class="form-table">
<tbody>


<tr valign="top">
   <th scope="row"><label for="footer_email">Footer</label></th>
   <td><input name="footer_email" type="text" id="footer_email" value="<?php echo $footer_email;?>" class="regular-text code"></td>
</tr>
<tr valign="top">
   <th scope="row"><label for="service_email">Service</label></th>
   <td><input name="service_email" type="text" id="service_email" value="<?php echo $service_email;?>" class="regular-text code"></td>
</tr>
<tr valign="top">
   <th scope="row"><label for="friend_email">Friend</label></th>
   <td><input name="friend_email" type="text" id="friend_email" value="<?php echo $friend_email;?>" class="regular-text code"></td>
</tr>


</tbody>
</table>

-->


<script type="text/javascript">
  jQuery(document).ready(function() {
	jQuery(".image_btn").click(function(){
	 currentlyselected = jQuery(this).attr('rel');
	 var icon_url_obj;
	 jQuery(this).parent().find('input.icon_url').each( function(index, element) {
		icon_url_obj = jQuery(this);
	 });
	 tb_show('', 'media-upload.php?type=image&amp;type=image&amp;TB_iframe=true');   
	  window.send_to_editor = function(html) {
	   imgurl = jQuery('img',html).attr('src');
	   icon_url_obj.val(imgurl);
	   tb_remove();
	 }
	 return false;
	});
	
	jQuery(".hide_link").click( function(){
		 jQuery(this).parent().fadeOut(400,function(){
			jQuery(this).remove();
		});
	 });
   
  });
 </script>


<p class="submit"><input type="submit" name="save_gateway_settings" id="save_gateway_settings" class="button button-primary" value="Save Changes"></p>
</form>

</div>

<?php
}
?>