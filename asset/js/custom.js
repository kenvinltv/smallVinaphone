$(document).ready(function(){
	
	$(document).on('click', 'a[href^="#"]', function (event) {
		event.preventDefault();

		$('html, body').animate({
			scrollTop: $($.attr(this, 'href')).offset().top
		}, 500);
	});
	
	function quydoi(){
		var hienthi = $('.control-goicuoc :selected').val();
		$('.noidung-goicuoc').hide();
		$('.noidung-goicuoc-'+hienthi).fadeIn();
	}
	
	$("#quidoi-mi-dialog").on('show', function(event){
		quydoi();
	});	
	
	$(".quidoi-button").click(function(){
		quydoi();
	});
	
	$('select').on('change', function() {
	  quydoi();
	});
	
});




























