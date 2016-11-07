<?
/*
 * @package aklion
*/
?>

<?
	$tag = $this->tag;
	
	switch($tag)
	{
		case null:
			$items = new WP_Query(array('orderby' => array('title' =>'ASC'), 'post_type' => 'product', 'product_cat' => $this->category, 'posts_per_page' => -1));
			break;
		case 'Хит':
			$items = new WP_Query(array('orderby' => array('tag_count' =>'ASC'), 'post_type' => 'product', 'product_tag'=>'хит', 'posts_per_page' => $this->count));
			break;
		case 'NEW':
			$items = new WP_Query(array('orderby' => array('date' =>'DESC'), 'post_type' => 'product', 'product_tag'=>'new', 'posts_per_page' => $this->count));
			break;
	}
	
	if(!$items->have_posts() || ($tag == null && $this->category == ''))
	{
		echo '<h5 class="grey-text">Товары отсутствуют</h5>';
	}
	else
	{
		while ($items->have_posts())
		{
			$items->the_post();
			global $woocommerce, $product, $post;
			
			$rating = get_average_rating();
			$species = get_prepared_specy();
			$image = get_the_post_thumbnail_url($product->id); 
			$type = $product->is_type('simple') ? 'simple' : $product->is_type('variable') ? 'variable' : '';

			if($this->tag == null)
			{
				$tag = get_related_tag();
			}

			get_template_part_ex('/partials/items/item', array(
				'tag' => $tag,
				'image' => $image,
				'rating' => $rating,
				'species' => $species,
				'type' => $type));
		}
		wp_reset_postdata();
	}
?>