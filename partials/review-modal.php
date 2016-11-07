<div id="al-modal-add-review" class="modal">
	<div class="modal-content valign-wrapper">
		<div class="row al-no-vmargin">
			<div class="col s12 s12 s12">
				<h5 class="grey-text">Напишите отзыв</h5>
			</div>
			<div class="col s12 s12 s12">
				<?
					if (comments_open())
					{
						$fields = array(
							'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Name' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
										'<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
							'email'  => '<p class="comment-form-email"><label for="email">' . __( 'Email' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
										'<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>'
							);
						
						$comments_args = array(
							'class_form' => 'al-review-form-wrapper',
							'label_submit' => 'Отправить',
							'fields' => $fields,
							'submit_button' =>
								'<input name="%1$s" type="submit" id="al-submit-review" class="btn right waves-effect waves-green btn-flat" value="%4$s" />'
						);

						comment_form($comments_args);
					}
				?>
			</div>
		</div>
	</div>
</div>

