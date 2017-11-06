// JavaScript Document
$('#computer_btn').click(function(){
	var data = $('#computer_form').serializeArray();
	$.post('upload_process.php', data, function(info){ $('#feedback').html(info);}); 
});

$('#computer_form').submit(function(){
	return false;
});