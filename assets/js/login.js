$(document).ready(function(){
	
	$('#btn-login').click(function(e){
		var txtEmail = $('#txtEmail').val();
		alert(txtEmail);
		e.preventDefault();
	});

	$('#txtEmail').blur(function(){
		var email = $('#txtEmail').val();
		if(email != 'mirandayomar@gmail.com'){
			alert('Usted no se encuentra registrado');
		}else{
			alert('Eres un puto genio Jajajaja');
		}
	});
});