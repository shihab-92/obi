$(document).ready(function(){

	$("#start").on('click',function(){
		$(".signup_login_panel").fadeIn(1500).removeClass("hidden-lg");
		$(".signup_login_panel").addClass("visible-lg");
	});

	$("#signup_login_form").validate({
		rules:{
			user_email:{
				required: true,
				email: true
			}
		}
	});

	$("#sign_up").on('click',function(){
		if($("#signup_login_form").valid()){
			alert("all valid!!");
		}
	});
	$(window).scroll(function(){
		var scroll = $(this).scrollTop();
		var height = $(".heading").height();
		var barposition = "10px";
                // console.log(scroll, barposition);
                if(scroll >= height-20){
                	$(".fixed_nav").addClass("top-menu-custom");

                	$(".navbar-nav li a").click(function(event) {
                		$(".navbar-collapse").collapse('hide');
                	});
                }else{
                	$(".fixed_nav").removeClass("top-menu-custom");
                }
            })

});