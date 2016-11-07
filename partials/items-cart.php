<?
/*
 * @package aklion
*/
?>

<?
	if(WC()->cart->cart_contents_count  == 0)
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
			$variation = $item['variation_id'];
			$image = get_the_post_thumbnail_url($id); 
			$terms = wp_get_post_terms($id, 'post_tag', array('fields' => 'all'));
			$tag = get_related_tag_part($terms);
			$title = get_the_title($id);
			$text = get_post_field('post_content', $id);
			$price = $item['data']->price;
			$count = $item['quantity'];
			$species = get_prepared_specy($id);
			$selectedSpecy = '';
			$selectedCost = 0;
			
			foreach ($species as $specy)
			{
				if($specy['id'] == $variation)
				{
					$selectedSpecy = $specy['text'];
					$selectedCost = $specy['cost'];
				}
			}
			if($selectedCost == 0)
			{
				$selectedCost = $price;
			}
			
			get_template_part_ex('/partials/items/item-cart', array(
				'hash_key' => $hash_key,
				'id' => $id,
				'variation' => $variation,
				'image' => $image,
				'tag' => $tag,
				'species' => $species,
				'title' => $title,
				'text' => $text,
				'price' => $price,
				'count' => $count,
				'selectedSpecy' => $selectedSpecy,
				'selectedCost' => $selectedCost
				));
		}
	}
?>