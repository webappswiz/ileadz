<?php 
/*
$footer_email= get_option('footer_email', '');
$service_email= get_option('service_email', '');
$friend_email= get_option('friend_email', '');
*/

$admin_email = get_option('admin_email'); 

if(isset($_POST['footer-submitted'])) {
	
	
	
	$name = trim($_POST['naam']);
	$email = trim($_POST['emailadres']);
	$phone = trim($_POST['telefoon']);
	$bedrijf = trim($_POST['bedrijf']);
	$bericht = trim($_POST['bericht']);
	$pack = trim($_POST['pack']);	
	$radio = trim($_POST['radio']);
	
	$subject = 'iLeads email';



		
		
		$body = "<div style='text-align:center; float:left; width:100%;padding:5px 0px; font-size:21px;color:#444444;'><b>iLeadz</b></div><div style='border-top:1px dotted #ccc; border-bottom:1px dotted #ccc; padding:15px 0px; float:left; width:100%;'><b>Name:</b> $name <br /><b>Email:</b> $email <br /><b>Phone Number:</b> $phone <br /><b>Bedrijf:</b> $bedrijf <br /><b>Bericht:</b> $bericht <br /><b>Pack:</b> $pack <br /></div><b>Tijd van uw voorkeur:</b> $radio <br /></div>";
		$headers = 'From: iLeadz <info@ileadz.nl>'.'Internet Marketing' . "\r\n";
		
        add_filter('wp_mail_content_type',create_function('', 'return "text/html"; '));
		wp_mail($admin_email, $subject, $body, $headers);
}	

 ?>
 
