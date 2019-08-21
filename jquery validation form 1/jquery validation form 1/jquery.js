$(document).ready(function() {
	$('#usercheck').hide();
	$('#passcheck').hide();
	$('#conpasscheck').hide();

	var user_err = true;
	var pass_err = true;
	var conpass_err = true;

	$('#usernames').keyup(function(){
		username_check();
	});
	function username_check(){
		var user_val = $('#usernames').val();
		
		if (user_val.length == '') {
			$('#usercheck').show();
			$('#usercheck').html("** Please fill the username");
			$('#usercheck').focus();
			$('#usercheck').css("color" , "red");
			user_err = false;
			return false();

		}else{
			$('#usercheck').hide();
		}
		if ((user_val.length < 3) || (user_val.length > 10)) {
			$('#usercheck').show();
			$('#usercheck').html("** username length must be between 3 to 10");
			$('#usercheck').focus();
			$('#usercheck').css("color" , "red");
			user_err = false;
			return false();

		}else{
			$('#usercheck').hide();
		}
	}

	$('#password').keyup(function (){
		password_check();
	});

	 function password_check(){
	 	var passwordstd = $('#password').val();

	 	if(passwordstd.length == ''){
	 		$('#passcheck').show();
			$('#passcheck').html("** Please fill the username");
			$('#passcheck').focus();
			$('#passcheck').css("color" , "red");
			pass_err = false;
			return false;

		}else{
			$('#passcheck').hide();
	 }
	 if ((passwordstd.length < 4) || (passwordstd.length > 10)) {
			$('#passcheck').show();
			$('#passcheck').html("** Password length must be between 4 to 10");
			$('#passcheck').focus();
			$('#passcheck').css(("color" , "red"), ("background-color","gray"));
			pass_err = false;
			return false;

		}else{
			$('#passcheck').hide();
		}
	 	}

	 	$('#conpassword').keyup(function(){
	 		con_password();
	 	});
	 	function con_password(){
	 		var conpass = $('#conpassword').val();
	 		var passwordstd = $('#password').val();
	 		if(passwordstd != conpass){
	 		$('#conpasscheck').show();
			$('#conpasscheck').html("** Password are not matching");
			$('#conpasscheck').focus();
			$('#conpasscheck').css("color" , "red");
			pass_err = false;
			return false;

		}else{
			$('#conpasscheck').hide();
	 		}
	 	}
});