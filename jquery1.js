/*$(document).ready(function(){

	$('#btn').on('click',()=>{
		console.log('Clicked....')
		var x = $('#user').val();
		x = "<i>"+x+"</i>"
		$('#text1').html(x);
	});
});*/

function myfunction(){
	var x = parseInt(document.getElementById('user').value);
	console.log(typeof(x));
	if( x > 50 ){
		document.getElementById('text1').innerHTML = "Congradulation You are Passed";
	}else{
		document.getElementById('text1').innerHTML = "Sorry You are Failed , Try Again";
	}
};