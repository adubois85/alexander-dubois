$('.fa-caret-up').click(function(){
	$('#slideout-about-me').toggleClass('on');
});

$(".fa-caret-right").on("click", function() {
	$("#slideout-projects").toggleClass('on');
});

$(".fa-caret-down").on("click", function() {
	$("#slideout-contact-form").toggleClass('on');
});

$(".fa-caret-left").on("click", function() {
	$("#slideout-resume").toggleClass("on");
});

