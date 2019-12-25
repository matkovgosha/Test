$(document).ready(function() {
	
	$(document).delegate('form','submit',function(){
		var form = $(this);
		var params = $(this).serialize();
		$.ajax({
			url:"form.php",
			type:"post",
			dataType:"json",
			data:params,
			success:function (data) { 
				//if(typeof data.redirect != 'undefined')
				//	window.location = data.redirect;
				if(typeof data.message != 'undefined'){	
						form.find('[type="reset"]').trigger('click');
						$('.popup-message').show();
						$('.over').fadeOut(300);
						setInterval(removePopup, 5500);
				}
			}
		});
		return false;
	});
	$('input[type="submit"]').click(function(e){
		alert('Спасибо за вашу заявку! Мы свяжемся с вами в ближайшее время');
	});	
	$('.primary a[href^="#"]').bind('click.smoothscroll',function (e) {
		e.preventDefault();

		var target = this.hash,
		$target = $(target);

		$('html, body').stop().animate({
			'scrollTop': $target.offset().top -37
		}, 900, 'swing', function () {
			window.location.hash = target;
		});
		$('.primary li').removeClass('active');
		$(this).parent().addClass('active');
	});
	
	$('#f_sl').jcarousel({
		start: 1,
		visible: 3,
		wrap: "circular",
	});
	
	$('#smi').jcarousel({
		start: 1,
		visible: 3,
		wrap: "circular",
	});
	
	$('#doc a').lightBox();
	$('#we_in a').lightBox();
	$('#work a').lightBox();
	

	//over
	$('.primary li span').click(function(){
		$('.over.pr').fadeIn(500);
	});
	$('.over .close').click(function(){
		$('.over').fadeOut(500);		
	});

	$("body").click(function(e) {
		$(".over").css("display","none");
	});
	$(".over_center").click(function(e) {
		e.stopImmediatePropagation();
	});
	$(".primary li span").click(function(e) {
		e.stopImmediatePropagation();
	});
	
	
	$('#work .go_more').click(function(){
		$('#work .work_body .hiden').show();
		$(this).parents('.load_more').hide();
	});
	
	
});