<div class="m-cta_wrapper <?php if(is_page( 'urgence' ) || is_page('emergency')): ?>l-3col<?php endif; ?>">
	<a href="/bbc/soins-services" class="m-cta l-soins">
		<span><strong>Soins</strong> &amp; <strong>Services</strong><i class="icon-caret-right"></i></span>
	</a>
	<a href="/bbc/technologies" class="m-cta l-tech">
		<span><strong>Technologies</strong><i class="icon-caret-right"></i></span>
	</a>
	<a href="/bbc/dentistes" class="m-cta l-equipe">
		<span><strong>Notre équipe</strong><i class="icon-caret-right"></i></span>
	</a>
	<?php if(!is_page( 'urgence' ) && !is_page('emergency')): ?>
	<a href="/bbc/urgence" class="m-cta last l-urgence">
		<span><strong>Urgence</strong><i class="icon-caret-right"></i></span>
	</a>
	<?php endif; ?>
</div>