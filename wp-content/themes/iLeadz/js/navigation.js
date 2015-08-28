/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens.
 */
( function() {
	var nav = document.getElementById( 'site-navi' ), button, menu;
	if ( ! nav )
		return;
	button = nav.getElementsByTagName( 'h3' )[0];
	menu   = nav.getElementsByTagName( 'ul' )[0];
	if ( ! button )
		return;

	// Hide button if menu is missing or empty.
	if ( ! menu || ! menu.childNodes.length ) {
		button.style.display = 'none';
		return;
	}

	button.onclick = function() {
		if ( -1 == menu.className.indexOf( 'nav-menu' ) )
			menu.className = 'nav-menu';





		if ( -1 != button.className.indexOf( 'toggled-on' ) ) {
			button.className = button.className.replace( ' toggled-on', '' );
			menu.className = menu.className.replace( ' toggled-on', '' );
		} else {
			button.className += ' toggled-on';
			menu.className += ' toggled-on';
		}
	};
} )();


$(document).ready(function(){
	
	$(".menu-toggle").on("click", function() {
		
	var h = $(window).height() - 116;
	$("#site-navi").css('height',h);
	
    $("#site-navi").animate({
       width: [ "toggle", "swing" ]
    }, 400, "linear", function() {});

	});
	
	
	
	$("#site-navi li.menu-item-has-children a span").click(function(event){
		event.stopPropagation();
		event.preventDefault();
	
		$("#site-navi li.menu-item-has-children a span").removeClass('close');
		//slide up all the link lists
		$("#site-navi ul ul").slideUp();
		//slide down the link list below the h3 clicked - only if its closed
		if(!$(this).closest('a').next().is(":visible"))
		{
			$(this).addClass('close');
			$(this).closest('a').next().slideDown();
		}
	})
	
})