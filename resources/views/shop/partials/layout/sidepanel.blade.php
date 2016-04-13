
<div class="body-overlay"></div>

<div id="side-panel" class="dark">

		<div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="icon-line-cross"></i></a></div>

		<div class="side-panel-wrap">

	 

			<div class="widget quick-contact-widget clearfix">

				<h4>Quick Contact</h4>
				<div id="quick-contact-form-result" data-notify-type="success" data-notify-msg="<i class=icon-ok-sign></i> Message Sent Successfully!"></div>
				<form id="quick-contact-form" name="quick-contact-form" action="include/quickcontact.php" method="post" class="quick-contact-form nobottommargin">
					<div class="form-process"></div>
					<input type="text" class="required sm-form-control input-block-level" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="Full Name" />
					<input type="text" class="required sm-form-control email input-block-level" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="Email Address" />
					<textarea class="required sm-form-control input-block-level short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="4" cols="30" placeholder="Message"></textarea>
					<input type="text" class="hidden" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
					<button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="button button-small button-3d nomargin" value="submit">Send Email</button>
				</form>

				<script type="text/javascript">

					jQuery("#quick-contact-form").validate({
						submitHandler: function(form) {
							jQuery(form).find('.form-process').fadeIn();
							jQuery(form).ajaxSubmit({
								target: '#quick-contact-form-result',
								success: function() {
									jQuery(form).find('.form-process').fadeOut();
									jQuery(form).find('.sm-form-control').val('');
									jQuery('#quick-contact-form-result').attr('data-notify-msg', jQuery('#quick-contact-form-result').html()).html('');
									SEMICOLON.widget.notifications(jQuery('#quick-contact-form-result'));
								}
							});
						}
					});

				</script>

			</div>

		</div>

	</div>

Reviews table fields: ID, user_id(foreign key users.ID), product_id(foreign key products.ID), text
Products table fields: ID, category_id(foreign key categories.ID), brand_id(foreign key brands.ID), name
Categories table fields: ID, name
Brands table fields: ID, name
Users table fields: ID, username
$reviews = Review::orderBy('id', 'DESC')->paginate(5);