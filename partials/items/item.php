<?
/*
 * @package aklion
*/
?>

<div class="col l4 m6 s12 al-item" onclick="modalClick(event, <? the_ID() ?>)">
    <div class="card hoverable center al-item-card">
        <div class="al-item-container al-price-<?the_ID()?>">
			<?
				switch($this->tag)
				{
					case 'Хит':
						echo '<div class="al-mark al-mark-red white-text">';
						echo '<p>Хит!</p>';
						echo '</div>';
						break;
					case 'NEW':
						echo '<div class="al-mark al-mark-orange white-text">';
						echo '<p>NEW</p>';
						echo '</div>';
						break;
				}
			?>
			<div class="row al-item-wrapper al-no-vmargin">
				<div class="al-item-image-wrapper">
					<img class="responsive-img" src="<? echo $this->image; ?>">
				</div>
				<input type="hidden" class="al-species-serialized" value="<?  echo htmlspecialchars(json_encode($this->species), ENT_QUOTES, 'UTF-8'); ?>">
				<div class="valign-wrapper al-item-title">
					<h5 class=""><b><? echo get_the_title(); ?></b></h5>
				</div>
				<p class="center-align al-item-text al-no-vmargin">
					<?  
						echo get_the_content();
					?>
				</p>
				<span class="al-item-star-icon">
					<?
						//Поправить, как только рейтинг будет действительным через некоторое время.
						$rating = $this->rating == 0 ? 4 : $this->rating;
						
						for ($i = 0; $i < $rating; ++$i)
						{
							echo '★';
						}
					?>
				</span>
				<div class="row valign-wrapper al-no-hmargin al-no-vmargin">
					<div class="col l7 m8 s8 al-species-container">
						<?
							foreach($this->species as $specy)
							{
								echo '<div class="row al-no-vmargin valign-wrapper">';
								echo '	<div class="col l8 m8 s8 al-species-info">';
								echo '		<div class="row al-no-vmargin">';
								echo '			<span class="left al-item-species-text">' . $specy['text'] . ' </span>';
								echo '		</div>';
								echo '		<div class="row al-no-vmargin">';
								echo '			<span class="left al-item-species-text">Вес ' . $specy['weight'] . '±50 г.' . '</span>';
								echo '		</div>';
								echo '	</div>';
								echo '	<div class="col l5 m4 s4 al-no-hpadding">';
								echo '		<h6 class="al-no-vmargin al-item-species-cost">' . $specy['cost'] . ' ₽</h6>';	
								echo '	</div>';
								echo '</div>';
							}
						?>
					</div>
					<div class="col l5 m4 s4 right">
						<div class="row valign-wrapper al-no-vmargin">
							<div class="col l6 m2 s2 al-no-hpadding">
								<span class="right material-icons al-item-add-icon valign">add</span>
							</div>
							<div class="col l6 m9 s9 al-no-hpadding">
								<a href="#al-modal" class="right btn btn-floating waves-light modal-trigger valign al-item-add-button" onclick="modalClick(event, <? the_ID() ?>)"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
</div>