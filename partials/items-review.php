<?
/*
 * @package aklion
*/
?>

<?
	$args = array(
		'number' => $this->count,
		'orderby' => 'comment_date',
		'order' => 'DESC',
		'status' => 'approve',
		'offset' => $this->offset
	);

	if($comments = get_comments($args))
	{
		foreach($comments as $comment)
		{
			get_template_part_ex('/partials/items/item-review', array(
				'author' => $comment->comment_author,
				'text' => mb_substr(strip_tags($comment->comment_content), 0, 240 ) . '...'
			));
		}
	}
?>