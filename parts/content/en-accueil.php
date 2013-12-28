<div class="m-cta_wrapper <?php if(is_page( 'urgence' ) || is_page('emergency')): ?>l-3col<?php endif; ?>">
	<a href="/bbc/care-services" class="m-cta l-soins">
		<span><strong>Care and Services</strong><i class="icon-caret-right"></i></span>
	</a>
	<a href="/bbc/advanced-technologies" class="m-cta l-tech">
		<span><strong>Technology</strong><i class="icon-caret-right"></i></span>
	</a>
	<a href="/bbc/our-team" class="m-cta l-equipe">
		<span><strong>Our Team</strong><i class="icon-caret-right"></i></span>
	</a>

	<?php if(!is_page( 'urgence' ) && !is_page('emergency')): ?>
	<a href="/bbc/emergency" class="m-cta last l-urgence">
		<span><strong>Emergency</strong><i class="icon-caret-right"></i></span>
	</a>
	<?php endif; ?>
</div>