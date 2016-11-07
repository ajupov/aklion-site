<?
/*
 * @package aklion
*/
	add_image_size('image_size', 260, 200, true);
	add_filter('wp_ajax_the_cart_total_ajax', 'the_cart_total_ajax');
	add_action('wp_ajax_nopriv_the_cart_total_ajax', 'the_cart_total_ajax');
	add_filter('wp_ajax_the_cart_items_ajax', 'the_cart_items_ajax');
	add_action('wp_ajax_nopriv_the_cart_items_ajax', 'the_cart_items_ajax');
	add_filter('wp_ajax_remove_cart_item_ajax', 'remove_cart_item_ajax');
	add_action('wp_ajax_nopriv_remove_cart_item_ajax', 'remove_cart_item_ajax');
	add_filter('wp_ajax_change_cart_item_ajax', 'change_cart_item_ajax');
	add_action('wp_ajax_nopriv_change_cart_item_ajax', 'change_cart_item_ajax');
	add_filter('wp_ajax_create_order_ajax', 'create_order_ajax');
	add_action('wp_ajax_nopriv_create_order_ajax', 'create_order_ajax');
	add_filter('wp_ajax_create_back_call_ajax', 'create_back_call_ajax');
	add_action('wp_ajax_nopriv_create_back_call_ajax', 'create_back_call_ajax');
	add_filter('wp_ajax_get_reviews_ajax', 'get_reviews_ajax');
	add_action('wp_ajax_nopriv_get_reviews_ajax', 'get_reviews_ajax');

	class Templater
	{
		public function __construct($file, $args = array())
		{
			
			$this->file = $file . '.php';
			$this->args = $args;
		}
		
		private $file;
		private $args;

		public function __get($name)
		{
			return $this->args[$name];
		}

		public function __isset($name)
		{
			return isset($this->args[$name]);
		}

		public function render()
		{
			if(locate_template($this->file))
			{
				include(locate_template($this->file));
			}
		}
	}

	function get_template_part_ex($file, $args = array())
	{
		$template = new Templater($file, $args);
		$template->render();
	}

	function get_prepared_specy($id = 0)
	{
		
		if($id == 0)
		{
			global $woocommerce, $product;
		}
		else
		{
			$product = get_product($id);
		}
		
		$species = array();
		
		if($product->is_type('simple'))
		{
			array_push($species, array(
				'id' => $product->get_id(), 
				'weight' => $product->get_weight(), 
				'text' => '', 
				'cost' => $product->get_price(), 
				'attribute' => '',
				'attributeName' => ''
			));
			
		}
		elseif($product->is_type('variable'))
		{
			$variations = $product->get_available_variations();

			foreach ($variations as $variation)
			{
				if(!empty($variation['attributes']))
				{
					$attributes = $variation['attributes'];
					if(!empty($attributes['attribute_pa_diameter']))
					{
						switch($attributes['attribute_pa_diameter'])
						{
							case 'small':
								$text = 'Диаметр 33 см';
								break;
							case 'middle':
								$text = 'Диаметр 36 см';
								break;
							case 'large':
								$text = 'Диаметр 50 см';
								break;
						}
						$id = $variation['variation_id'];
						$weight = trim(str_replace('g', '', $variation['weight']));
						$cost = $variation['display_price'];
						$attribute = $attributes['attribute_pa_diameter'];
						$attributeName = 'attribute_pa_diameter';
						
						array_push($species, array(
							'id' => $id, 
							'weight' => $weight, 
							'text' => $text, 
							'cost' => $cost, 
							'attribute' => $attribute,
							'attributeName' => $attributeName
						));
					}
				}
			}
		}
		
		return $species;
	}

	function get_average_rating()
	{
		global $woocommerce, $product;

		return $product->get_average_rating();
	}

	function get_related_tag()
	{
		global $woocommerce, $product;
		$terms = get_the_terms($product->id, 'product_tag');
		return get_related_tag_part($terms);
	}

	function get_related_tag_part($terms)
	{
		$term_array = array();
		if (!empty($terms) && !is_wp_error($terms)){
			foreach ($terms as $term) 
			{
				$term_array[] = $term->name;
			}
		}
		
		if(in_array('NEW', $term_array))
		{
			return 'NEW';
		}
		else if(in_array('Хит', $term_array))
		{
			return 'Хит';
		}
		
		return '';
	}
	
	function the_cart_content()
	{
		$items = $woocommerce->cart->get_cart();
		$result = array();
		
		foreach($items as $item)
		{
			$id = $item['product_id'];
			$image = get_the_post_thumbnail($id, 'small_thumb'); 
			$terms = wp_get_post_terms($id, 'post_tag', array('fields' => 'all'));
			$title = get_the_title($id);
			$price = $item['data']->price;
			$count = $item['quantity'];
			
			array_push($result, array(
							'id' => $id,
							'image' => $image,
							'title' => $title,
							'price' => $price,
							'count' => $count
						));
			
			$json_decode = htmlspecialchars(json_encode($result), ENT_QUOTES, 'UTF-8');
			echo $json_decode;			
		}
		
		return $output;
	}

	function the_cart_total() 
	{
		echo WC()->cart->cart_contents_total . ' ₽';
	}

	function the_cart_total_ajax()
	{
	  the_cart_total();
	  die();
	}
	
	function the_cart_items_ajax()
	{
		echo get_template_part('/partials/items-mini');
		die();
	}
	
	function remove_cart_item_ajax()
	{
		$hash_key = $_POST['$hash_key'];
		$result = WC()->cart->remove_cart_item($hash_key);
		echo json_encode($result);
		die();
	}
	
	function create_back_call_ajax(){
		$phone = $_POST['phone'];
		$name = $_POST['name'];
		$note = $_POST['note'];
		$message = 'Поступила заявка на звонок по номеру ' . $phone . ' от ' . $name . '. ' . $note;
		if(wp_mail('mail@ak-lion.ru', 'Обратный звонок', $message))
		{
			echo 'Ваша заявка принята!';
		}
		else
		{
			echo 'Произошла ошибка!';
		}
		
		die();
	}
	
	function change_cart_item_ajax()
	{
		$hash_key = $_POST['$hash_key'];
		$count = $_POST['$count'];
		$result = WC()->cart->set_quantity($hash_key, $count);
		echo json_encode($result);
		die();
	}
	
	add_action('init', 'remove_old_redirect_function');

	function remove_old_redirect_function()
	{
		remove_action('template_redirect', 'wc_template_redirect');
		add_action('template_redirect', 'cart_empty_redirect_to_shop');
	}

	function cart_empty_redirect_to_shop()
	{
		global $woocommerce;
		
		if (is_page('cart') 
			&& !sizeof($woocommerce->cart->cart_contents))
		{
			wp_redirect('/');
			exit;
		}
		elseif(is_singular('product') || is_archive())
		{
			wp_redirect('/404/');
			exit;
		}
	}
	
	function create_order_ajax()
	{
		$address = array(
			'first_name'	=> $_POST['name'],
			'last_name' 	=> '',
			'company'   	=> '',
			'email'     	=> '',
			'phone'     	=> $_POST['phone'],
			'address_1' 	=> $_POST['street'] . ', ' . $_POST['house'],
			'address_2' 	=> $_POST['porch'] . ', ' . $_POST['apartment'],
			'city'      	=> 'Пенза',
			'state'     	=> 'Пензенская область',
			'postcode'  	=> '',
			'country'   	=> 'Россия',
			'note' 			=> $_POST['note']
		);
		
		$order = wc_create_order();
		$items = WC()->cart->get_cart();
		
		foreach($items as $item => $values)
		{		
			$product_id = $values['product_id'];
			$product = wc_get_product($product_id);
			$var_id = $values['variation_id'];
			$quantity = (int)$values['quantity'];
			if($var_id > 0)
			{
				$var_slug = $values['variation']['attribute_pa_diameter'];
				$variationsArray = array();
				$variationsArray['variation'] = array('pa_diameter' => $var_slug);
				$var_product = new WC_Product_Variation($var_id);
				$order->add_product($var_product, $quantity, $variationsArray);
			}
			else
			{
				$order->add_product($product, $quantity);
			}
		}

		$order->set_address($address, 'billing');
		$order->set_address($address, 'shipping');
		
		$order->calculate_totals();
		$order->update_status('processing');
		
		$text = '';
		if($_POST['note'])
		{
			$text .= 'Примечание: "' . $_POST['note'] . '".';
		}
		if($_POST['need_lease'])
		{
			$text .= ' Приготовить сдачу с суммы: ' . $_POST['lease_sum'] . ' руб.';
		}
		if($text != '')
		{
			$order->custom_data = $text;
		}
		
		WC()->cart->empty_cart();

		echo 'Ваш заказ принят!';
		die();
	}
	
	function get_reviews_ajax()
	{
		$args = array(
			'number' => '3',
			'orderby' => 'comment_date',
			'order' => 'DESC',
			'status' => 'approve',
			'offset' => $_POST['offset']
		);

		if($comments = get_comments($args))
		{
			foreach($comments as $comment)
			{
				get_template_part_ex('/partials/items/item-review', array(
					'author' => $comment->comment_author,
					'text' => mb_substr(strip_tags($comment->comment_content), 0, 250 ) . '...'
				));
			}
			die();
		}
	}