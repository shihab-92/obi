$(document).ready(function(){

	$("#start").on('click',function(){
		$(".signup_login_panel").fadeIn(1500).removeClass("hidden");
	});

	$("#signup_login_form").validate();

	$("#sign_up").on('click',function(){
		if($("#signup_login_form").valid()){
			alert("all valid!!");
		}
	});

});