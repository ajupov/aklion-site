var showedAllCallouts = false;
var species;
var currentId;

$(document).ready(function () {
    initSlider();
	initSelect();
	initSelectOnCart();
    initShowAllCalloutsButton();
    initModal();
	initSelectAndNumberic();
	initNumbericOnCart();
	initCurrentDayOfWeek();
	initDayOfWeekMouseEnter();
	initChangeNeedLease();
	initPhoneMask();
	initNumbericField($('#lease-sum'), 3);
	initNumbericField($('#porch'), 3);
	initNumbericField($('#apartment'), 3);
	initCollapsible();
	initSizes();
});

$(window).resize(function() {
	initSizes();
});

$(document).on('click', function(e) {
  if (!$(e.target).closest("#al-cart-inner").length) {
    $('#al-float-cart').hide(200);
  }
  e.stopPropagation();
});

function initCollapsible(){
	$(".button-collapse").sideNav();
}

function initSizes(){
	var el = $('#al-reviews-inner').children().eq(2);
	if(window.location.href.indexOf('reviews') < 0 && window.screen.width < 992) {
       el.hide();
    } else{
		el.show();
	}
}

function initSlider() {
    $('.carousel-slider').carousel({ full_width: true, indicators:true });
	autoplay();
}

function initSelect(){
	$('select').material_select();
}

function initShowAllCalloutsButton() {
    $('#al-show-all-callouts').click(function () {
        if (!showedAllCallouts) {
            $('.al-callout-hidden').show();
            var destination = $(this).offset().top;
            $('body').animate({ scrollTop: destination }, 1000);
            $(this).text('СКРЫТЬ ОТЗЫВЫ');
            showedAllCallouts = true;
        } else {
            $('.al-callout-hidden').hide(1000);
            $(this).text('ПОСМОТРЕТЬ ВСЕ ОТЗЫВЫ');
            showedAllCallouts = false;
        }
        return false;
    });
}

function initModal() {
    $('.modal-trigger').leanModal();
}

function initSelectAndNumberic(){
	$('#al-modal-select').change(onChangeSelectOrCount);
	$('#al-modal-count').change(onChangeSelectOrCount);
}

function initSelectOnCart(){
	$('.al-cart-select').change(setCostInCartItem);
}

function initNumbericOnCart(){
	$('.al-cart-numeric').change(setCostInCartItem);
}

function scrollToProducts(e) {
	e.preventDefault();
	var destination = $('.al-green').offset().top - 100 - (screen.width > 600 ? 64 : 0);
	$('body').animate({ scrollTop: destination }, 1000);
}

function autoplay() {
    $('.carousel').carousel('next');
	setTimeout(autoplay, 4500);
}

function getSelectHtml(){
	var result = '';
	$.each(species, function(key, value) {
		result += '<option value="' + value.id + '">' + value.text.replace(/[(,)]/g, '').trim() +'</option>';
	});
	
	return result;
}

function modalClick(e, id) {
	e.preventDefault();
	currentId = id;
	var mark = $('.al-price-' + id + ':first .al-mark p').text();
	var title = $('.al-price-' + id + ':first .al-item-title').text();
	var text = $('.al-price-' + id + ':first .al-item-text').text();
	var rating = $('.al-price-' + id + ':first .al-item-star-icon').text();
	var imageUrl = $('.al-price-' + id + ':first img').attr('src');
	species = $.parseJSON($('.al-price-' + id + ':first .al-species-serialized').val());
	var selectHtml = getSelectHtml();
	$('#al-modal-species-container div').remove();
	$('.al-price-' + id + ':first .al-species-container >').clone().appendTo('#al-modal-species-container');
	$('#al-modal-select option').remove();
	$('#al-modal-select').append(selectHtml);
	$('#al-modal-select').material_select();
	if($('#al-modal-select option').length === 1 && $('#al-modal-select option').val().length){
		$('.select-wrapper').hide();
	}
	$('#al-modal-mark').text(mark);
	$('#al-modal-title').text(title);
	$('#al-modal-item-text').text(text);
	$('#al-modal-rating').text(rating);
	$('#al-modal-image').attr('src', imageUrl);
	$('#al-modal-mark').css('color', mark === 'Хит!' ? '#b41500' :  mark === 'NEW' ? '#ff8a00' : '#000000');
	$('#al-modal-select').trigger('change');
	$('#al-modal-count').val('1');
	$('#al-modal').openModal();
}

function onChangeSelectOrCount(){
	var cost = getSelectedSpecyCost();
	var count = getSelectedCount();
	$('#al-modal-cost').text((cost * count) + ' ₽');
}

function getSelectedSpecyCost(){
	var id = getSelectedSpecyId();
	var cost = getSpecyCostById(id);
	return cost;
}

function getSelectedCount(){
	return parseInt($('#al-modal-count').val());
}

function getSelectedSpecyId(){
	return parseInt($('select option:selected').val());
}

function getSpecyCostById(id){
	var specy = species.filter(function(e) {
		return e.id === id; 
	})[0];
	if(specy !== undefined){
		return specy.cost;
	}	
	return 0;
}

function getSpecyAttributeById(id){
	var specy = species.filter(function(e) {
		return e.id === id; 
	})[0];
	
	if(specy !== undefined){
		return specy.attribute;
	}
	return 0;
}

function getSpecyAttributeName(){
	var specy = species[0];
	if(specy !== undefined){
		return specy.attributeName;
	}
	return 0;
}


function addToCart(e){
	e.preventDefault();
	var count = getSelectedCount();
	var id = getSelectedSpecyId();
	var variation_id = getSelectedSpecyId();
	var attributeName = getSpecyAttributeName();
	var attribute = getSpecyAttributeById(id);
	var url = 'http://ak-lion.ru/cart/?' +
		'add-to-cart=' + currentId +
		'&variation_id=' + variation_id +
		'&quantity=' + count +
		'&' + attributeName + '=' + attribute;
	 jQuery.post(url, function (data) {
		 updateCartTotal();
		 updateCartItems();
	 });
}

function updateCartItems(){
	var data = { 'action': 'the_cart_items_ajax' };
	$.post(woocommerce_params.ajax_url, data, function(response){
		$('#al-float-cart-inner').html(response.trim());
	});
}

function updateCartTotal(){
	var data = { 'action': 'the_cart_total_ajax' };
	$.post(woocommerce_params.ajax_url, data, function(response){
		$('#al-cart-total').text(response.trim());
		$('#al-checkout-total').text(response.trim());
		$('#al-menu-cart-span').text(response.trim());
	});
}

function removeCartItem(e, hash_key){
	e.preventDefault();
	var data = { 'action': 'remove_cart_item_ajax', '$hash_key': hash_key };
	$.post(woocommerce_params.ajax_url, data, function(response){
		if($.parseJSON(response)){
			$('.al-cart-hash-' + hash_key).remove();
			updateCartTotal();
			updateCartItems();
		}
	});
}

function refreshCartItem(e, hash_key, id){
	e.preventDefault();
	hashSelector = '[data="' + hash_key + '"]';
	var count = parseInt($('input[type="number"]' + hashSelector).val());
	var data = { 'action': 'change_cart_item_ajax', '$hash_key': hash_key, '$count': count };
	$.post(woocommerce_params.ajax_url, data, function(response){
		if($.parseJSON(response)){
			updateCartTotal();
			updateCartItems();
			$('a' + $hashSelector).hide();
		}
	});
}

function setCostInCartItem(e){
	e.preventDefault();
	var hash = $(this).attr('data');
	if(hash !== undefined){
		var hashSelector = '[data="' + hash + '"]';
		var species = $.parseJSON($('input[type="hidden"]' + hashSelector).val());
		$('a' + hashSelector).show();
		var cost = parseInt($('.al-cart-selected-cost' + hashSelector).val());
		var count = parseInt($('input[type="number"]' + hashSelector).val());
		$('span' + hashSelector).text((cost * count) + ' ₽');
	}
}

function showCartMini(e){
	e.preventDefault();
	if($('#al-float-cart').css('display') === 'none'){
		var width = $('#al-cart').css('width');
		$('#al-float-cart').css('width', width);
		$('#al-float-cart').show(300);
	} else {
		$('#al-float-cart').hide(200);
	}
}

function createOrder(e){
	e.preventDefault();
	var name = $('#name');
	var phone = $('#phone');
	var street = $('#street');
	var house = $('#house');
	var porch = $('#porch');
	var apartment = $('#apartment');
	var note = $('#note');
	var need_lease = $('#need-lease');
	var lease_sum = $('#lease-sum');
	
	if(!isValid(name)){
		return;
	} else if(!isValid(phone)){
		return;
	} else if(!isValid(street)){
		return;
	} else if(!isValid(house)){
		return;
	} else if(need_lease.is(':checked') && !isValid(lease_sum)){
		return;
	}
	
	$('#al-cart-submit').addClass('not-active');
	
	var data = { 
		'action': 'create_order_ajax', 
		'name': name.val(), 
		'phone': phone.val(), 
		'street': street.val(),
		'house': house.val(),
		'porch': porch.val(),
		'apartment': apartment.val(),
		'note': note.val() + ' ' + (need_lease.is(':checked') ? 
			' Приготовить сдачу с ' + lease_sum.val() + ' р'
			: ' Без сдачи')
	};
	
	$.post(woocommerce_params.ajax_url, data, function(response){
		showModalInfo(response, true);
	});
};

function isValid(e){
	var offset = 120;
	var animateTime = 1000;
	
	if(e.val().length === 0){
		e.addClass('invalid');
		e.focus();
		$('html, body').animate({
			scrollTop: e.offset().top - offset
		}, animateTime);
		return false;
	}
	
	return true;
}

function initPhoneMask(){
	$('#phone, #phone_back_call').mask('+79999999999', { greedy: false });
}

function initCurrentDayOfWeek(){
	var num = new Date().getDay();
	var time = getWorkTime(num);
	$('#al-work-time-value').text(time);
	$('.al-day[data="' + num + '"]').css('border', '1px white solid');
}

function initDayOfWeekMouseEnter(){
	$('.al-day').mouseenter(function(){
		var num = parseInt($(this).attr('data'));
		var time = getWorkTime(num);
		$('#al-work-time-value').text(time);
	});
	
	$('.al-day').mouseleave(function(){
		initCurrentDayOfWeek();
	});
}

function getWorkTime(num){
	return (num === 0 || num === 5 || num === 6) ? 'с 11:00 до 00:00' : 'с 11:00 до 23:00';
}

jQuery(document).ready(function($) {
	$("#contact").submit(function() {
		var str = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "/partials/items/feedback_form.php",
			data: str,
			success: function(msg) {
				if(msg == 'OK') {
					result = '<div class="ok">Сообщение отправлено</div>';
					$("#fields").hide();
				}
				else {result = msg;}
				$('#note').html(result);
			}
		});
		return false;
	});
});

function initChangeNeedLease(){
	$('#need-lease').change(function(e){
		e.preventDefault();
		if($(this).is(':checked')){
			$('#al-lease-sum-wrapper').show();
		} else {
			$('#al-lease-sum-wrapper').hide();
		}
	});
};

function initNumbericField(el, length){
		el.keypress(function(e){
		var keycode = event.which;
		if($(this).val().length > length){
			event.preventDefault();
		}
		if (!(event.shiftKey == false && (keycode == 46 || keycode == 8 || keycode == 37 || keycode == 39 || (keycode >= 48 && keycode <= 57)))) {
			event.preventDefault();
		}
	});
}

function showModalInfo(message, reload) {
	$('#al-info-message').text(message);
	$('#al-modal-info').openModal({complete: function(){
		if(reload){
			window.location = '/';
		}
	}});
}

function showBackCallModal(e){
	e.preventDefault();
	$('#al-back-call').openModal({opacity: 0});
}

function createBackCall(e){
	e.preventDefault();
	
	var name_back_call = $('#name_back_call');
	var phone_back_call = $('#phone_back_call');
	var note_back_call = $('#note_back_call');
	
	if(!isValid(name_back_call)){
		return;
	} else if(!isValid(phone_back_call)){
		return;
	}
	
	$('#al-create-call-back').addClass('not-active');
	
	var data = { 
		'action': 'create_back_call_ajax', 
		'name': name_back_call.val(), 
		'phone': phone_back_call.val(),
		'note': note_back_call.val()
	};
	
	$('#al-back-call').closeModal();
	
	$.post(woocommerce_params.ajax_url, data, function(response){
		showModalInfo(response, false);
	});
}

function showAddReviewDialog(e){
	e.preventDefault();
	if($('#al-is-comments-open').val() === '1'){
		$('#al-modal-add-review').openModal();

	}
}