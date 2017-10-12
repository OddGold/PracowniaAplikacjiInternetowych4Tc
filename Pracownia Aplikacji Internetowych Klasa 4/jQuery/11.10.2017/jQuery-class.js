jQuery(document).ready(function(){
	
	$('#tlo1').click(function(){
		$('#akapit').addClass('tlo1');
	})
	
	/*$('#tlo2').click(function(){
		$('#akapit').addClass('tlo2');
	})*/
	
	$('#tlo2').click(function(){
		$('#akapit').toggleClass('tlo2');
	})
	
	$('#tlo3').click(function(){
		//$('#akapit').removeClass('tlo1');
		//$('#akapit').removeClass();
		alert($('#akapit').hasClass('tlo1'))
	})
	
	
	
});