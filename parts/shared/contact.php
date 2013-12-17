


	<?php if(get_locale() == "fr_FR"){ ?>
	<div class="wrapper m-contact">
		<?php if(!is_page( 'urgence' ) && !is_page('emergency')): ?>
		<h3 class="banner contact">Contactez-nous</h3>
		<?php endif; ?>
		<div class="contact-block">
			<h4>Localisation</h4>
			<p>4470, rue Beaubien Est, bureau&nbsp;103<br/>
				Montréal (Québec)<br/>
				H1T 3Y8
			</p>
			<a href="https://maps.google.ca/maps?q=4470,+rue+Beaubien+Est,+bureau+103+Montr%C3%A9al+(Qu%C3%A9bec)+H1T+3Y8&ie=UTF8&hnear=4470+Rue+Beaubien+Est,+Montr%C3%A9al,+Qu%C3%A9bec+H1T+1T3&gl=ca&t=m&z=16" target="_blank" class="m-button"><i class="left icon-map-marker"></i>Voir dans Google Maps</a>
		</div>
		<div class="contact-block">
			<h4>Heures d’ouverture</h4>
			<ul class="schedule">
				<li><span class="d">Lundi</span> <span class="t">8h00 à 20h00</span></li>
				<li><span class="d">Mardi</span> <span class="t">7h00 à 18h00</span></li>
				<li><span class="d">Mercredi</span> <span class="t">8h00 à 18h00</span></li>
				<li><span class="d">Jeudi</span> <span class="t">8h00 à 20h00</span></li>
				<li><span class="d">Vendredi</span> <span class="t">7h00 à 15h00</span></li>
			</ul>
		</div>
		<div class="contact-block">
			<h4>Trajets d’autobus</h4>
			<p class="first"><strong>Métro Beaubien</strong></p>
			<p>Prendre l'autobus 18 vers l'est jusqu'à l'arrêt de la 29e rue.</p>

			<p class="first"><strong>Métro Honoré-Beaugrand</strong></p>
			<p>Prendre l'autobus 18 vers l'ouest jusqu'à l'arrêt de la 29e rue.</p>
		</div>
		<div class="contact-block last">
			<h4>Téléphone</h4>
			<p>Pour prendre rendez-vous ou pour plus de renseignements, composez le <span class="phone"><span class="text"><i class="icon-phone"></i>514 374-5950</span> <a href="tel:+5143745950" class="m-button"><i class="icon-phone"></i>514 374-5950</a></span></p>
		</div>
	</div>

	<?php }else{ ?>

	<div class="wrapper m-contact">
		<?php if(!is_page( 'urgence' ) && !is_page('emergency')): ?>
		<h3 class="banner contact">Contact Us</h3>
		<?php endif; ?>
		<div class="contact-block">
			<h4>Address:</h4>
			<p>4470 Beaubien Street East Suite 103<br/>
				Montreal, (Quebec)<br/>
				H1T 3Y8
			</p>
			<a href="https://maps.google.ca/maps?q=4470,+rue+Beaubien+Est,+bureau+103+Montr%C3%A9al+(Qu%C3%A9bec)+H1T+3Y8&ie=UTF8&hnear=4470+Rue+Beaubien+Est,+Montr%C3%A9al,+Qu%C3%A9bec+H1T+1T3&gl=ca&t=m&z=16" target="_blank" class="m-button"><i class="left icon-map-marker"></i>Search Google Maps</a>
		</div>
		<div class="contact-block">
			<h4>Business Hours:</h4>
			<ul class="schedule">
				<li><span class="d">Monday</span><span class="t">8am – 8pm</span></li>
				<li><span class="d">Tuesday</span><span class="t">7am – 6pm</span></li>
				<li><span class="d">Wednesday</span><span class="t">8am – 6pm</span></li>
				<li><span class="d">Thursday</span><span class="t">8am – 8pm</span></li>
				<li><span class="d">Friday</span><span class="t">7am – 3pm</span></li>
			</ul>
		</div>
		<div class="contact-block">
			<h4>Bus Routes:</h4>
			<p class="first"><strong>Beaubien Metro Stop</strong></p>
			<p>Take Bus 18 East to the 29th Street stop.</p>

			<p class="first"><strong>Honoré-Beaugrand Metro Stop</strong></p>
			<p>Take Bus 18 West to the 29th Street stop.</p>
		</div>
		<div class="contact-block last">
			<h4>Telephone:</h4>
			<p>To schedule an appointment or to obtain further information, please call: <span class="phone"><span class="text"><i class="icon-phone"></i>514 374-5950</span> <a href="tel:+5143745950" class="m-button"><i class="icon-phone"></i>514 374-5950</a></span></p></div>
	</div>
	<?php } ?>