$("#multiple_choice").on("click",function() {
	$('div').find("[data-select='selected']").attr("data-select","").css('border','1px solid grey');
	$('#multiple_choice').attr("data-select","selected");
	$('div').find("[data-select='selected']").css('border','1px solid blue');

	$("#changeable-content").replaceWith($("#changeable-content").load('multiple_choice.html'));
});

$("#word_cloud").on("click",function() {
	$('div').find("[data-select='selected']").attr("data-select","").css('border','1px solid grey');
	$('#word_cloud').attr("data-select","selected");
	$('div').find("[data-select='selected']").css('border','1px solid blue');

	$("#changeable-content").replaceWith($("#changeable-content").load('word_cloud.html'));
});

$("#scales").on("click",function() {
	$('div').find("[data-select='selected']").attr("data-select","").css('border','1px solid grey');
	$('#scales').attr("data-select","selected");
	$('div').find("[data-select='selected']").css('border','1px solid blue');

	$("#changeable-content").replaceWith($("#changeable-content").load('scales.php'));
});

$("#open_ended").on("click",function() {
	$('div').find("[data-select='selected']").attr("data-select","").css('border','1px solid grey');
	$('#open_ended').attr("data-select","selected");
	$('div').find("[data-select='selected']").css('border','1px solid blue');

	$("#changeable-content").replaceWith($("#changeable-content").load('open_ended.php'));
});

$("#100_points").on("click",function() {
	$('div').find("[data-select='selected']").attr("data-select","").css('border','1px solid grey');
	$('#100_points').attr("data-select","selected");
	$('div').find("[data-select='selected']").css('border','1px solid blue');

	$("#changeable-content").replaceWith($("#changeable-content").load('100_points.php'));
});

$("#matrix").on("click",function() {
	$('div').find("[data-select='selected']").attr("data-select","").css('border','1px solid grey');
	$('#matrix').attr("data-select","selected");
	$('div').find("[data-select='selected']").css('border','1px solid blue');

	$("#changeable-content").replaceWith($("#changeable-content").load('matrix.php'));
});

$("#who_win").on("click",function() {
	$('div').find("[data-select='selected']").attr("data-select","").css('border','1px solid grey');
	$('#who_win').attr("data-select","selected");
	$('div').find("[data-select='selected']").css('border','1px solid blue');

	$("#changeable-content").replaceWith($("#changeable-content").load('who_win.php'));
});

