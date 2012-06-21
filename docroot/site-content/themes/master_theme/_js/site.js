// site specific javascript

	// html 5 elements
    document.createElement("header");
    document.createElement("hgroup");
    document.createElement("nav");
    document.createElement("article");
    document.createElement("address");
    document.createElement("section");
    document.createElement("datalist");
    document.createElement("time");
    document.createElement("footer");


if(!jQuery.browser.safari)
{
	jQuery(document).ready(function(){
		behavior_binder();
	});
}
else
{
	jQuery(window).load(function(){
		behavior_binder();
	});
}


/*
Binds behaviors
** can be re-run whenever there are DOM changes
*/
function behavior_binder(){


	/* MENU FUNCTIONS */
	// adds a className to each menu item's LI that matches the text content, removing all non-alphanumeric characters and replacing spaces with a dash
	jQuery('#menu-custom-menu li a').each(function(){
		jQuery(this).parent('li').addClass('menu-item-'+jQuery(this).html().toLowerCase().replace(/\&amp;/g,'').replace(/[^a-zA-Z0-9 ]/g,'').replace(/\s+/g,'-'));
	})
}
