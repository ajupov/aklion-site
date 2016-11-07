<?
/*
 * @package aklion
*/
?>

<?
	if(WC()->cart->get_cart_contents_count() == 0)
	{
		echo '<h5 class="grey-text">Корзина пуста</h5>';
	}
	else
	{
		global $woocommerce;
		$items = $woocommerce->cart->get_cart();
		
		foreach($items as $hash_key => $item)
		{
			$id = $item['product_id'];
			$image = get_the_post_thumbnail_url($id, array(64, 64));
			$title = get_the_title($id);
			$count = $item['quantity'];
			$price = $item['data']->price;
			
			get_template_part_ex('/partials/items/item-mini', array(
				'hash_key' => $hash_key,
				'id' => $id,
				'image' => $image,
				'title' => $title,
				'count' => $count,
				'price' => $price
				));
		}
	}
?>