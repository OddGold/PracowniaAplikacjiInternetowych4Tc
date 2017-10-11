$(document).ready(function(){
	
	/*$('tr:even').css('background', '#b2aaaa'); //even - parzyste wiersze
	$('tr:odd').css('background', '#f1278a'); //even - parzyste wiersze*/
	
	$('#tabela1 tr:even').css('background', '#b2aaaa'); //even - parzyste wiersze
	$('#tabela1 tr:odd').css('background', '#f1278a'); //even - parzyste wiersze
	$('#tabela1 tr:first').css('background', 'rgba(245, 34, 164, 0.23)'); //first - pierwszy wiersz
	$('#tabela1 tr:last').css('background', 'rgba(55, 134, 264, 0.23)'); //last - pierwszy wiersz
	$('#tabela1 tr:eq(3)').css('background', 'rgba(125, 234, 64, 0.23)'); //eq(x) - x wiersz
	$('#tabela1 td:contains("Sól")').css('background', 'rgba(28, 42, 19, 0.97)'); //eq(x) - x wiersz
	
	$('p:hidden').show(3000);
	
	$('#niewidoczny').click(function(){
		$('#auto').hide(1500);
	})
	$('#widoczny').click(function(){
		$('#auto').show(1500);
	})
	
})