"use strict";

var GP={
	init:function(){
		$('.ph').hide();
		//toggle_panels();
		this.reset();
		$('#bspp-g>li.selected').each(
			 function(i){
			$('a img',this).delay(i*150).show().animate({'width':'100%','opacity':1}, 750, function(){ 
																							 
			//Mobile Hover Simulate																				 
			$(this).parent().on("touchstart", function (e) {  
				var l = $(this); 
				if (l.hasClass('hover')) {
					return true;
				} else {
					l.addClass('hover');
					$('a.tap').not(this).removeClass('hover');
					var t=$(this).parent();
					GP.partnerinfo(t);					
					e.preventDefault();
					return false; 
				}
			});																			 
																						 
			$(this).parent().parent().hover(
				function(){	
					var t=$(this);
					GP.partnerinfo(t);
				},				
				function(){
					$('#partner-info').stop().hide();})	
			});			
		});
	
	}
	,
	reset:function(){
		$('#bspp-g>li>a>img').css({'opacity':'0','width':'80%'});
		$('#partner-info').hide();
		$('#bspp-g>li').unbind('mouseenter mouseleave');	
	},
	partnerinfo:function(t){
			var o=t.position();
			$('#partner-info ul').html($('.partner-info', t).html());
			$('#partner-info .bsp-logo').html($('a',t).html());
			$('#partner-info .arrow').css({'left':o.left+(t.width()*0.5)});
			$('#partner-info').css({'top':o.top+t.outerHeight()+73+'px'}).fadeIn().focus();
			
			$('html').click(function() {
				$('#partner-info').hide();
			});
			
			t.click(function(event){
				event.stopPropagation();
			});
	}
}


var SP={
 	sb:{'s':0,'e':16},
	set_nav:function(){
		SP.sb.e>=$('#bspp-s li.selected').length ? $('#silver-partners .next').hide() : $('#silver-partners .next').show();
		SP.sb.s<1?$('#silver-partners .prev').hide():$('#silver-partners .prev').show() ;	
	}
	,
	 hide_nav:function(){
		$('#silver-partners .next, #silver-partners .prev').hide() ;
	}
	
	,
	init:function(){
		this.sb={'s':0,'e':16};
		$('#silver-partners .prev').unbind('click').bind('click', SP.prev);
		$('#silver-partners .next').unbind('click').bind('click', SP.next);
		$('#bspp-s li.selected').each(function(i){i>= SP.sb.e ? $(this).hide() : $(this).show() })	
		SP.set_nav()
	},
	next:function(){
		SP.hide_nav();
		SP.sb.s+=16;
		SP.sb.e+=16;		
		$('#bspp-s').animate({'left':-($(window).width()+$(this).width()+100)}, function(){$(this).css({'left':$(window).width()+$(this).width()+100})
		$('#bspp-s li.selected').each(function(i){$('img', this).attr('src', $('img', this).data('original'));
		i>=SP.sb.s&&i<SP.sb.e ? $(this).show() : $(this).hide() })
		$('#bspp-s').animate({'left':'0'}, function(){	SP.set_nav()});	});
		
	},
	prev:function(){
		SP.hide_nav();
		SP.sb.s-=16;
		SP.sb.e-=16;		
		$('#bspp-s').animate({'left':$(window).width()+$(this).width()+100}, function(){$(this).css({'left':-($(window).width()+$(this).width()+100)})
		if(SP.sb.e<16){SP.sb.e=16;SP.sb.s=0;}
		$('#bspp-s li.selected').each(function(i){i>=SP.sb.s&&i<SP.sb.e ? $(this).show() : $(this).hide() })
		$('#bspp-s').animate({'left':'0'}, function(){SP.set_nav();});
		});		
		
	}

}





var BP={
	bb:{'s':0,'e':32}, 
	init:function(){
		BP.bb={'s':0,'e':32}; 
		$('#bronze-partners .prev').unbind('click').bind('click', BP.prev);
		$('#bronze-partners .next').unbind('click').bind('click', BP.next);
		$('#bspp-b li.selected').each(function(i){i>= BP.bb.e ? $(this).hide() : $(this).show() })
		BP.set_nav()
	},
	set_nav:function(){
		BP.bb.e>$('#bspp-b li.selected').length ? $('#bronze-partners .next').hide() : $('#bronze-partners .next').show();
		BP.bb.s<1?$('#bronze-partners .prev').hide():$('#bronze-partners .prev').show();		
	},
	next:function(){
		BP.hide_nav();
		BP.bb.s+=32; 
		BP.bb.e+=32;	
		$('#bspp-b').animate({'left':-($(window).width()+$(this).width()+100)}, function(){$(this).css({'left':$(window).width()+$(this).width()+100})
		$('#bspp-b li.selected').each(function(i){i>=BP.bb.s&&i<BP.bb.e ? $(this).show() : $(this).hide() })
		$('#bspp-b').animate({'left':'0'}, function(){BP.set_nav()});});	
	},
	prev:function(){
		BP.hide_nav();
		BP.bb.s-=32;
		BP.bb.e-=32;		
		$('#bspp-b').animate({'left':$(window).width()+$(this).width()+100}, function(){$(this).css({'left':-($(window).width()+$(this).width()+100)})
		if(BP.bb.e<32){BP.bb.e=32;BP.bb.s=0;}
		$('#bspp-b li.selected').each(function(i){i>=BP.bb.s&&i<BP.bb.e ? $(this).show() : $(this).hide() })
		$('#bspp-b').animate({'left':'0'}, function(){BP.set_nav()});});
		
		
	},
	 hide_nav:function(){
		$('#bronze-partners .next, #bronze-partners .prev').hide() ;
	}

}


var BSPP = function() {
    this.init_filter();
	

};


BSPP.prototype = {
  
    init_filter: function() {
        var o = this;
        var e = jQuery("#bspp-select").first();
        e.on("change", function() {
            o.apply_filter(this);
        });
        jQuery.each(e, function() {
            var v = this.options[this.selectedIndex].value;
            if (v.length && v.length == 2) {
                o.apply_filter(this);
            }
        });
	
    },
    apply_filter: function(k) {
	//GP.reset();
	 var i, c, e;
        var cc = k.options[k.selectedIndex].value;
        for (i in country_conf) {
            c = country_conf[i];
            e = jQuery("*[data-post-id=ID]".replace(/ID/, i));
            if (c.length > 0 && c.indexOf(cc) < 0) {
                e.removeClass('selected').hide();
            } else {
                e.addClass('selected')
            }
        
        }
		// SP.init();
		// BP.init(); 			
		$('body,html').animate({  scrollTop: $("#gold-partners").offset().top-175 }, 500) .promise().then(function(){ GP.init();}) 
    }
};

setTimeout(function() {
    jQuery(document).ready(function() {
		new BSPP;		
		//SP.init();
		//BP.init();
		GP.init();
		
		
    });
}, 0);




function fade_silver_partners(){
	var si=$('#silver-partners a img');	
	for(var i in si){$(si).eq(i).delay(i*50).animate({'width':'100%', 'opacity':1});}
	
}
function show_all_partners(){
	$('.ph').slideDown(1000);	
	fade_silver_partners();
}


function toggle_panels(){
if($('.ph:visible').length==0){
		var s=$('#silver-partners');
		var t=s.offset().top;
		var w=$(window).scrollTop()+$(this).height()-300;	
		if(w>t)show_all_partners();
	}	
}
//$(window).scroll(toggle_panels);