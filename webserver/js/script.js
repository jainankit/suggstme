//Placeholders
(function(a){a(function(){var b=Modernizr.input.placeholder;if(!b){var c=a("input[placeholder]"),d=c.length,e,f="placeholder";while(d--)c[d].value=c[d].value?c[d].value:c.eq(d).addClass(f).attr("placeholder"),c.eq(d).focus(function(){var b=a(this);this.value==b.attr("placeholder")&&(b.removeClass(f),this.value="")}).blur(function(){var b=a(this);this.value==""&&(b.addClass(f),this.value=b.attr("placeholder"))}),function(b){a(b.form).bind("submit",function(){b.value==a(b).attr("placeholder")&&(b.value="")})}(c[d])}})})(jQuery)

function EqualColumns(columns) {
  var biggestHeight = 0;  
    jQuery(columns).each(function(){  
        if(jQuery(this).height() > biggestHeight){  
            biggestHeight = jQuery(this).height();  
        }  
    });  
    jQuery(columns).height(biggestHeight);  
}
$(document).ready(function() {
if (jQuery("#portfolio").length) {	
        $(function(){
      var $container = $('#portfolio');
      $container.isotope({
        itemSelector : '.portfolio',
		layoutMode : 'fitRows'
      });
	  
      var $optionSets = $('#options .option-set'),
          $optionLinks = $optionSets.find('a');

      $optionLinks.click(function(){
        var $this = $(this);
        // don't proceed if already selected
        if ( $this.hasClass('selected') ) {
          return false;
        }
        var $optionSet = $this.parents('.option-set');
        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected');
  
        // make option object dynamically, i.e. { filter: '.my-filter-class' }
        var options = {},
            key = $optionSet.attr('data-option-key'),
            value = $this.attr('data-option-value');
        // parse 'false' as false boolean
        value = value === 'false' ? false : value;
        options[ key ] = value;
        if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
          // changes in layout modes need extra logic
          changeLayoutMode( $this, options )
        } else {
          // otherwise, apply new options
          $container.isotope( options );
        }
        return false;
      });
  });
	}
});
$(window).load(function() {
	if (jQuery("#nav").length) {	
$("#nav").wrap('<div class="nav_position">');
	}

});
$(document).ready(function() {
	/* Twitter feed */
/*        jQuery(".tweets").tweet({
                count: 1, // count of messages
				username: "olegnax", //twitter username
                loading_text: "Loading tweets..."
        });
*/	
	if (jQuery(".slider").length) {	
	jQuery('#nav').fadeIn(400);
			if ($("#s4").length) {
					$(function() {
					$('#s4')
						.after('<div id="nav">')
						.cycle({ 
						fx:     'fade', 
						speed:  1000, 
						timeout: 3000, 
						pause: 1,
						pager:  '#nav'
					});
					});
				};
	}
	if (jQuery(".slider2").length) {	
	jQuery('.slider2').fadeIn(300);
			if ($("#s4").length) {
					$(function() {
					$('#s4')
						.after('<div id="nav">')
						.cycle({ 
						fx:     'scrollHorz', 
						speed:  1000, 
						timeout: 3000, 
						pause: 1,
						pager:  '#nav'
					});
					});
				};
	}
	if (jQuery(".portfolio_slider").length) {	
	jQuery('.slide').fadeIn(400);
			if ($("#s4").length) {
					$(function() {
					$('#s4')
						.after('<div id="nav_portfolio">')
						.cycle({ 
						fx:     'fade', 
						speed:  1000, 
						timeout: 3000, 
						pause: 1,
						pager:  '#nav_portfolio'
					});
					});
				};
	}
	
		

	
	

		
		
	jQuery('ul.sf-menu').superfish({
    hoverClass:  'sfHover',
    delay:       'false',
    animation:   {opacity:'show', height:'auto'},
    speed:       '1',
    autoArrows:  false,
    dropShadows: false,
    disableHI:   true
  }).supposition();
  
  
  
	$(".button").hover(function () {
			$(this).find('.button_hover').stop(true,true).animate({
			bottom: "0"}, 
			{ 
				duration: 400,
			easing: 'swing'
 			} );
		},
		function () {
   $(this).find('.button_hover').stop(true,true).animate({
   bottom: "41px"}, 
   { 
	   duration: 400,
   easing: 'swing',
complete: function(){$(this).css('bottom', '-41px');}
} )

	});
	
		$(".button2").hover(function () {
			$(this).find('.button2_hover').stop(true,true).animate({
			bottom: "0"}, 
			{queue:false,
				duration: 400,
			easing: 'swing'
 			} );
		},
		function () {
   $(this).find('.button2_hover').stop(true,true).animate({
   bottom: "41px"}, 
   {queue:false,
	   duration: 400,
   easing: 'swing',
complete: function(){$(this).css('bottom', '-41px');}
} )
	});
	
	
	$(".list1 li").hover(function () {
			$(this).animate({color: "#39312c"}, {queue:false, duration:250 });
		},
		function () {
			$(this).animate({color: "#8f8f8f"}, {queue:false, duration:1050 });
	});

	$(".no-cssanimations .purchase").hover(function () {
			$(this).animate({backgroundColor: "#029fd3"}, {queue:false, duration:50 });
			 
		},
		function () {
			$(this).animate({backgroundColor: "#f4f4f4"}, { queue:false, duration:150});
	});
	$(".no-cssanimations .social a").hover(function () {
			$(this).animate({marginTop: "-10px" }, {queue:false, duration:250 });
			 
		},
		function () {
			$(this).animate({marginTop: "0px"}, { queue:false, duration:250});
	});

   
	$(".no-cssanimations .button_slider").hover(function () {
			$(this).animate({paddingLeft: "52px",paddingRight: "30px" }, {queue:false, duration:350 });
			 
		},
		function () {
			$(this).animate({paddingLeft: "22px",paddingRight: "60px" }, { queue:false, duration:350});
	});
	$(".cssanimations  .button_slider").each(function () {
			var a = jQuery(this).width();
			jQuery(this).width(a);
			$(this).find('span').css({position: "absolute" }, {queue:false, duration:350 });
		});
	

	
	
	width = $('.scale_img img').width();
    height = $('.scale_img  img').height();
	$('.scale_img div a').css({'width':width, 'height':height})
	var w = $('.scale_img img').width();
	var h = $('.scale_img img').height();
	
	$(".no-cssanimations .scale_img").hover(function () {
			$(this).find('img').animate({
								top: (h - parseInt(h * 1.1)) / 2,
								left: (w - parseInt(w * 1.1)) / 2,
								width: parseInt(w * 1.1), 
								height: parseInt(h * 1.1)
							}, { queue:false, easing: 'swing', duration:350});
							$(this).find('.hover_bg').animate({opacity:.2 }, {queue:false});
							$(this).find('.hover_bg_circle').animate({bottom:50 + '%', marginBottom:-57 + 'px' }, {queue:false, easing: 'easeOutBack'});
							$(this).find('.blog_post_date').animate({top:50 + '%', marginTop:-46 + 'px' }, {queue:false, easing: 'easeOutBack'});
			 
		},
		function () {
		$(this).find('img').animate({
								top: 0,
								left: 0,
								width: parseInt(w), 
								height: parseInt(h)
							}, { queue:false, easing: 'swing', duration:350});
		$(this).find('.hover_bg').animate({opacity:0 }, {queue:false});	
		$(this).find('.hover_bg_circle').animate({bottom:-150 + 'px', marginBottom:-46 + 'px' }, {queue:false, easing: 'easeOutBack'} );
		$(this).find('.blog_post_date').animate({top:-150 + 'px', marginTop:0 + 'px' }, {queue:false, easing: 'easeOutBack'} );
 	});
	
	
	
	
	if ($("a[data-pp^='lightbox']").length) {
			$("a[data-pp^='lightbox']").prettyPhoto({theme:'light_rounded'});
			};	
	
	
	
	
	
	$(".no-cssanimations .ec-circle").hover(function () {
			$(this).find('span').animate({width : '156px', height : '156px', 'margin-top' : '-16px', 'margin-left' : '-16px'  }, { queue:false, duration:200});
			$(this).find('strong').stop().delay(100).animate({width : '156px', height : '156px', 'margin-top' : '-78px', 'margin-left' : '-78px'  }, { queue:false, duration:200});
		},
		function () {
			$(this).find('span').animate({ width : '124px', height : '124px', 'margin-top' : '0px', 'margin-left' : '0px'  }, { queue:false, duration:150});
			$(this).find('strong').stop().animate({width : '0px', height : '0px', 'margin-top' : '0px', 'margin-left' : '0px'    }, { queue:false, duration:200});
	});
	
	
	$(".no-cssanimations .blog_news").hover(function () {
			$(this).find('.blog_news_date').animate({color: "#fff"}, {queue:false, duration:250 });
		},
		function () {
			$(this).find('.blog_news_date').animate({color: "#39312c"}, {queue:false, duration:250 });
	});
	
	$(".no-cssanimations .blog_post").hover(function () {
			$(this).find('.blog_post_date').animate({color: "#fff"}, {queue:false, duration:250 });
		},
		function () {
			$(this).find('.blog_post_date').animate({color: "#39312c"}, {queue:false, duration:250 });
	});
	jQuery('.list2 li').hover(function(){ 
   
   			 jQuery(this).animate({backgroundPosition: '-=5'},  300);
      }, function(){    
      		 jQuery(this).animate({backgroundPosition: '+=5'}, 200);     
    });
	

				
		
		
		
		
					//When page loads...
			$(".tab_content").hide(); //Hide all content
			$("ul.tabs li:first").addClass("active").show(); //Activate first tab
			$(".tab_content:first").show(); //Show first tab content
			
			//On Click Event
			$("ul.tabs li").click(function() {
			
				$("ul.tabs li").removeClass("active"); //Remove any "active" class
				$(this).addClass("active"); //Add "active" class to selected tab
				$(".tab_content").hide(); //Hide all tab content
			
				var activeTab = $(this).find("a").attr("href"); //Find the title attribute value to identify the active tab + content
				$(activeTab).fadeIn(); //Fade in the active ID content
				return false;
			});
	
});
			

$(function() {
		
		$(".sf-menu  li  a").append('<strong class="shover"> </strong>');
		// set opacity to nill on page load
		$(".sf-menu  li  a strong").css("opacity","0");
		// on mouse over
		$(".sf-menu  li  a ").hover(function () {
			// animate opacity to full
			
			$(this).find(".shover").stop().animate({
				opacity: 1
			}, 'slow');
		},
		// on mouse out
		function () {
			// animate opacity to nill
			$(this).find(".shover").stop().animate({
				opacity: 0
			}, 'slow');
		});
	});
	$(".sf-menu li ul").hover(function () {
			$(this).parent().addClass("opacity_true");
		},
		function () {
			$(this).parent().removeClass("opacity_true");
	});
	


	
//disable links

function disableLink(e) {
    // cancels the event
    e.preventDefault();

    return false;
}				



/* ajax function for forms */
function ajaxContact(form) {
	
        var $ = jQuery;
        
        var Data = $(form).serialize(),
        note = $(form).prev('.note');
        
        $.ajax({
            type: "POST",
            url: "send.php",
            data: Data,
            success: function(response) {
                                
                                $(form).animate({opacity: 0},'fast');                               
                                                                       
                                
                                        if (response = 'success') {                          
                                
                                        note.html('Your message sent to us!').slideDown('fast');                        
                                                                        
                                        } else { 
										
                                                note.html('Something is going wrong...').slideDown('fast');
                                        
                                        }
                                        
                                       
                                        
                                setTimeout(function() {                                         
                                        note.html('').slideUp('fast');
                                        $(form).find(".button_submit").unbind('click', disableLink);    
                                        $(form).find("input[type=text], textarea").val('');
                                        $(form).animate({opacity: 100},'fast');                                              
                                        },3000);
                                        
            },
                        error: function() {                     
                                        
                                        $(form).animate({opacity: 0},'fast');
                                
                                        note.html('Something is going wrong...').slideDown('fast');
                                        
                                        setTimeout(function() {
                                                
                                                note.html('').slideUp('fast');
                                                $(form).find(".button_submit").unbind('click', disableLink);   
                                                $(form).find("input[type=text], textarea").val('');
                                                $(form).animate({opacity: 100},'fast');                                              
                                                },3000);
                                
            }
        });

        return false;

    }

/* validate contacts forms */
jQuery(".button_submit").live('click',function(){
	
	
	jQuery(this).closest("form").validate({
					rules: {
									message: "required",
									email: "required email",
									name: "required",
									website: "required"
					 },  
					 messages: {
					
							 email: {
									 required: "We need your email address to contact you",
									 email: "Your email address must be in the format of name@domain.com"
							 }
			 }
			});	
	
	var valid = jQuery(this).closest("form").valid();	
	
	if (valid === true) {
			jQuery(this).bind('click', disableLink);
			ajaxContact(jQuery(this).closest("form"));			
	}
	
	return false;
});
if ($("#circle").length) {
$(function() {
				$('#circle').circlemouse({
					onMouseEnter	: function( el ) {
						el.addClass('ec-circle-hover');
					},
					onMouseLeave	: function( el ) {
						el.removeClass('ec-circle-hover');
					}
				});
			});
};
if (jQuery(".field_button").length) {	
 function initAddThis() 
     {
          addthis.init()
     }
	 initAddThis();
}