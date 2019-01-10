$(document).ready(function(){
	$(function(){
		$('#play').click(function(){$('#slider').cycle('resume'); return false;});
		$('#pause').click(function(){$('#slider').cycle('pause'); return false;});

		$('#slider').cycle({ 
	     	fx:			'scrollHorz',
			next:		'#next',
			prev:		'#prev',
			pager:		'#pager',
			timeout:	3000,
			pause:      1
		});
	});

	$('img').onClick()=function(){
		$('.img').addClass('hello');
	}
});