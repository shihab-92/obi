$(document).ready(function(){

	$("#start").on('click',function(){
		$(".login_panel").addClass("hidden-lg");
		$(".signup_login_panel").fadeIn(1500).removeClass("hidden-lg");
		$(".signup_login_panel").addClass("visible-lg");
	});

	$("#head_start").on('click',function(){
		$(".login_panel").addClass("hidden-lg hidden-xs hidden-sm hidden-md");
		$(".signup_login_panel").fadeIn(1500).removeClass("hidden-lg hidden-xs hidden-sm hidden-md");
		$(".signup_login_panel").addClass("visible-lg visible-xs visible-sm visible-md");
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
			$.ajax({
				type:"post",
				url: "custom_register.php",
				data:$("#signup_login_form").serialize(),
				beforeSend: function(){
                //TODO: dont know what to do yet
            },
            success:function(msg){
            	$("#signup_login_form").html("<h5 style='color:white;'>"+msg+"</h5>");
            },
            error: function(){
            	alert("failure");
            }

        });
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

	$("#web_login").on("click",function(){

		$(".signup_login_panel").addClass("hidden-lg hidden-xs hidden-sm hidden-md");
		$(".login_panel").fadeIn(1500).removeClass("hidden-lg hidden-xs hidden-sm hidden-md");
		$(".login_panel").addClass("visible-lg visible-xs visible-sm visible-md");
	});

	$("#facebook_login").on("click",function(){

		login();
	});


	$("#login_form").validate({
		rules:{
			user_email:{
				required: true,
				email: true
			},
			user_password:{
				required: true
			}
		}
	});

	$("#custom_web_login").on("click",function(){
		if($("#login_form").valid()){
			$.ajax({
				type:"post",
				url: "custom_login.php",
				data:$("#login_form").serialize(),
				beforeSend: function(){
                //TODO: dont know what to do yet
            },
            success:function(msg){
            	//console.log(msg);
            	if($.trim(msg) =="success"){
            		//console.log("right");
            	 window.location.replace("./Event.php");
            	}else{
            		//console.log("wrong");
            		window.location.replace("../Surveyobi");
            	}
            },
            error: function(){
            	alert("failure");
            }

        });
		}
	});
});