var inProgress = false;
var offset = 6;

$(document).ready(function(){
	$(window).scroll(function() {
		if($(window).scrollTop() + $(window).height() >= $(document).height() - 200 && !inProgress) {
			var data = { 
				'action': 'get_reviews_ajax', 
				'offset': offset
			};
			
			inProgress = true;
			$('#al-review-preloader').addClass('active');
			
			$.post(woocommerce_params.ajax_url, data, function(response){
				if(parseInt(response) !== 0){
					offset += 3;
					$("#al-reviews-inner").append(response);
				}
			})
			.always(function() { 
				inProgress = false;
				$('#al-review-preloader').removeClass('active');
			});
		}			
	});
});