$(document).ready(function(){
	
	$('div').css('background','yellow');
	$('.tekst').css('background','teal');
	$('#id1').css('background','red');
	$('#id2').css('color','white');
	$('#id1').css({
		'background':'white',
		'color': 'green'
	});	
	$('*').css('color','black');
	$('*').css('font-family',' arial','verdana');
	$('*').css({
		'color': 'red',
		'font-size': '95%'
	});
	
	$('#btn1').click(function(){
		$('#przyciskTekst').css('color','lime');	
	})
	
	$('#ukryjAkapit').click(function(){
		//$('#akapit').hide();
		//$('#akapit').hide('slow');
		$('#akapit').hide(2500);
	})
	$('#pokazAkapit').click(function(){
		//$('#akapit').show();
		//$('#akapit').show('fast');
		$('#akapit').show(1500);
	})
	
	$('#zmienHtml').click(function(){
		$('#html').html('<h1>Zmieniony tekst</h1>')
	})
	
	$('#kolorInny').click(function(){
		$('input[type="text"]').css('background','brown');
		$('input[type="password"]').css('background','green');
	})
	
	$('a').css('color','green');
	$('#link a').css('color','black');
	
	
	
});

