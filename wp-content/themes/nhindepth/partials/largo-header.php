<header id="site-header" class="clearfix" itemscope itemtype="http://schema.org/Organization">
	<?php largo_header(); ?>

	<?php 
	/* Notes for the Next Nerd:
	 * --------------------------
	 * Two unique elements to this MailChimp Signup Form:
	 * 1) The url in <form action=''>
	 * 2) The bot field for not real people name=''
	 */
	if (is_home()) { ?>
<div class="newsletter-signup">
			<form action="//indepthnh.us11.list-manage.com/subscribe/post?u=53cfe7768c926b2bc7dac5257&amp;id=17acd809a7" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				<label>Subscribe to our free newsletter</label>
				<fieldset>
					<input required type="email" value="" name="EMAIL" class="required email_address" id="mce-EMAIL" placeholder="Email address">
					<input required type="text" value="" name="FNAME" class="required first_name" id="mce-FNAME" placeholder="First name">
					<input required type="text" value="" name="LNAME" class="required last_name" id="mce-LNAME" placeholder="Last name">
					<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button submit">
					<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					<div style="position: absolute; left: -5000px;"><input type="text" name="b_53cfe7768c926b2bc7dac5257_17acd809a7" tabindex="-1" value=""></div>
				</fieldset>
			</form>
		</div>
	<?php } ?>

</header>
<header class="print-header">
	<p><strong><?php echo esc_html( get_bloginfo( 'name' ) ); ?></strong> (<?php echo esc_url( largo_get_current_url() ); ?>)</p>
</header>