	<div class="main-footer" id="main-footer">

	<?php if(!is_page( 'urgence' ) && !is_page('emergency')): ?>
		<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/contact' ) ); ?>
	<?php endif; ?>


		<div class="bot">
			<div class="wrapper">
			<?php if(get_locale() == "fr_FR"){ ?>
				<p class="copyrights">&copy; <?php echo date("Y"); ?> Clinique Bouchard-Bélanger-Cyr. Tous droits réservés.</p>
			<?php }else{ ?>
				<p class="copyrights">&copy; <?php echo date("Y"); ?> Bouchard-Bélanger-Cyr Dental Clinic. All rights reserved.</p>
			<?php } ?>
				<ul id="js-lang_switcher" class="m-switcher">
					<?php pll_the_languages(); ?>
				</ul>
				<a href="" class="b-gplus">Google+</a>
				<a href="" class="b-fb">Facebook</a>
			</div>
		</div>
	</div>