$('.fa-caret-up').click(function(){
	$('#slideout-about-me').toggleClass('on');
});

$(".fa-caret-right").on("click", function() {
	$(".section-projects").toggle(2000);
});

$(".fa-caret-down").on("click", function() {
	$(".section-contact-form").toggle(2000);
});

$(".fa-caret-left").on("click", function() {
	$("#slideout-about-me").toggleClass("on");
});

