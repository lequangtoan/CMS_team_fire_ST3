jQuery(document).ready(function() {

  var counter = jQuery('#counter-count').data('counter');
  if ( counter != '0')  {  
    jQuery('li.kakina-w-red-tab a').append('<span class="kakina-actions-count">' + counter + '</span>');
  } else {
    jQuery('.kakina-tab').removeClass( 'kakina-w-red-tab' );
  }
	/* Tabs in welcome page */
	function kakina_welcome_page_tabs(event) {
		jQuery(event).parent().addClass("active");
        jQuery(event).parent().siblings().removeClass("active");
        var tab = jQuery(event).attr("href");
        jQuery(".kakina-tab-pane").not(tab).css("display", "none");
        jQuery(tab).fadeIn();
	}

	var kakina_actions_anchor = location.hash;

	if( (typeof kakina_actions_anchor !== 'undefined') && (kakina_actions_anchor != '') ) {
		kakina_welcome_page_tabs('a[href="'+ kakina_actions_anchor +'"]');
	}

    jQuery(".kakina-nav-tabs a").click(function(event) {
        event.preventDefault();
		kakina_welcome_page_tabs(this);
    });

 /* Tab Content height matches admin menu height for scrolling purpouses */
		$tab = jQuery('.kakina-tab-content > div');
		$admin_menu_height = jQuery('#adminmenu').height();
    if( (typeof $tab !== 'undefined') && (typeof $admin_menu_height !== 'undefined') )
  {
		$newheight = $admin_menu_height - 180;
		$tab.css('min-height',$newheight);
  }
});
