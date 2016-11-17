(function ($) {

Drupal.behaviors.simple = {
  attach: function (context) {
	  
	/*var i = 1;
	$('.view .view-content .views-row').each(function(){
		$(this).addClass('views-row-'+i);
		i++;
	});*/
	
	$(window).scroll(function() {
		if ($(this).scrollTop() > 30){
			$('body').addClass("fixed_menu");
			$('.fixed_menu').fadeIn();
		} else {
			$('body').removeClass("fixed_menu");
			$('.fixed_menu').fadeOut();
		}
	});
	
	$('#footer_bottom_middle .footer_middle_right .simplenews-subscriber-form .form-actions .form-submit').wrap('<span class="submit_wrapper"></span>');
	
	$( ".teamdonate-form .radio-wrap label" ).click(function() {
		$('.teamdonate-form .radio-wrap label').removeClass('active');
		$(this).addClass('active');
	});
	
	$(".our-team-wrap .team-read-more").click(function(){
        $(this).parents('.our-team-wrap').find(".additional").slideToggle("slow");
    });
	
	$('#gallery_tabs .quick_tab > li > a').click(function(event){
		event.preventDefault();//stop browser to take action for clicked anchor
		//get displaying tab content jQuery selector
		var active_tab_selector = $('#gallery_tabs .quick_tab > li.active > a').attr('href');					
		//find actived navigation and remove 'active' css
		var actived_nav = $('#gallery_tabs .quick_tab > li.active');
		actived_nav.removeClass('active');
		//add 'active' css into clicked navigation
		$(this).parents('li').addClass('active');
		//hide displaying tab content
		$(active_tab_selector).removeClass('active');
		$(active_tab_selector).addClass('hide');
		//show target tab content
		var target_tab_selector = $(this).attr('href');
		$(target_tab_selector).removeClass('hide');
		$(target_tab_selector).addClass('active');
	});
	
	/************************/
	function windowSize() {
		  
		var windowwidth = $( window ).width();
		var windowheight = $( window ).height();
		
		var toolbarwindowheight = $( window ).height() - 80;
		
		$('.slideshow_area .view-slideshow .views_slideshow_cycle_teaser_section').height(windowheight);
		$('.slideshow_area .view-slideshow .views_slideshow_cycle_teaser_section .views_slideshow_slide').height(windowheight);
		$('.slideshow_area .view-slideshow .image-box img').height(windowheight);
		
		$('body.toolbar-fixed .slideshow_area .view-slideshow .views_slideshow_cycle_teaser_section').height(toolbarwindowheight);
		$('body.toolbar-fixed .slideshow_area .view-slideshow .views_slideshow_cycle_teaser_section .views_slideshow_slide').height(toolbarwindowheight);
		$('body.toolbar-fixed .slideshow_area .view-slideshow .image-box img').height(toolbarwindowheight);
		/*$('#slideshow .views-slideshow-cycle-main-frame-row img').each(function () {
			var img_height = $(this).height();
			var height_total = img_height + 65;
			if (img_height !== 0) {
				$('#slideshow .views-slideshow-cycle-main-frame-row img').height(height_total);
				return false;
			}
		});*/
		
	  }
	windowSize();
		$(window).resize(function(){
		windowSize();
	});

}
};
})(jQuery);



jQuery(function() {
  jQuery('.kmenu_area ul.menu li a').each(function() {
    if (jQuery(this).attr('href')  ===  window.location.pathname) {
      jQuery(this).parents('li').addClass('active-trial');
	  jQuery(this).addClass('active');
    }
  });
});
