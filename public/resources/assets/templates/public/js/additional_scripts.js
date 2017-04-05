// top link toggle
$(window).load(function() {
	if($(window).width() <= 991) {
		$(document).click(function() {
			$('.top-links').hide();
		});
		$('#top_link_trigger').click(function(e) {
			e.preventDefault();
			e.stopPropagation();
			$('.top-links').toggle();
		});

		// category menu
		$('.left_menu .nav-pills li > a i').click(function(e) {
			e.preventDefault();
			var $show_menu = $(this).closest('li.menu').find('> .submenu');
			if($show_menu.css('display') == 'none') {
				$show_menu.slideDown(500);
			}
			else {
				$show_menu.slideUp(500);
			}
		})
		// endcategory menu
	}
});
// end top link toggle

// sidebar menu
$('.sidebar_menu > li > i').click(function() {
	//$(this).closest('li').find('ul').toggleClass('toggled');
	$(this).closest('li').find('ul').toggle('slow');
});
// end sidebar menu

// change state of collapse arrow

// end change state of collapse arrow

// mark the chosen color
$('.color_block').click(function() {
	$(this).parent().toggleClass('bordercolor');
});
// end mark the chosen color 


/*** top search ***/

$(window).load(function() {
	$(this).scroll(function() {
		if($('#header').hasClass('sticky-header')) {
			$('.top_search').addClass('top_search_sticker');
		}
		else {
			$('.top_search').removeClass('top_search_sticker');
		}
	});
});

/*** submenu toggle ***/
$('.submenu_toggle').click(function() {
	$(this).next().toggle(500)
});
/*** end submenu toggle ***/

/*** four proudct group ***/
$(window).load(function() {
	if($(window).width() <= 767) {
		$(document).click(function() {
			$('.tab_nav_mb').hide();
		});
		$('.index_group_btn').click(function(e) {
			e.preventDefault();
			e.stopPropagation();
			$('.tab_nav_mb').toggle();
		});
		$('.tab_nav_mb li a').click(function(e) {
			$('.index_group_btn').html($(this).html()+' <i class="icon-sort-down"></i>');
		});
	}
});

/** scroll menu **/

$('body').scrollspy({target: "#myScrollspy", offset: 70}); 

var $root = $('html, body');
$('.scroll_menu a').click(function() {
	var padding = 50;
	var location = $( $.attr(this, 'href') ).offset().top - 50;
	$root.animate({
		scrollTop: ($( $.attr(this, 'href') ).offset().top - 50)
	}, 500);
	return false;
});

/** end scroll menu **/