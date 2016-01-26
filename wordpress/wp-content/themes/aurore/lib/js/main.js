$(document).ready(function() {
	$(document).foundation();
	scrollPages();
	clickChevron();
});

$(document).scroll(function() {
});

$(window).resize(function(){
});

$(window).load(function() {
});


function scrollPages() {

	var deleteLog = false;
	$('#fullpage').fullpage({
		anchors: ['firstPage', 'secondPage', '3rdPage'],
		navigation: true,
		scrollOverflow: true,
		navigationPosition: 'right',
	    afterLoad: function(anchorLink, index) {
			deleteLog = true;
	    	if(anchorLink == "secondPage" || anchorLink == "3rdPage") {
	    		$('header').animate({height: '24px'}, 800);
	    		$('#main-navigation').css('display', 'none');
	    		$('.chevron').css('display', 'block');
	    	} else if (anchorLink == "firstPage") {
	    		$('header').animate({height: '135px'}, 800);
	    		$('#main-navigation').css('display', 'block');
	    		$('.chevron').css('display', 'none');
	    	}
	    }
	});
}

function clickChevron() {
	if($('.chevron').css('display', 'block')) {
		$('.chevron').click(function() {
			$('header').animate({height: '135px'}, 800);
			$('#main-navigation').css('display', 'block');
			/*$('.chevron img').attr('src','img/chevronUp.png');*/
		});
	}
}