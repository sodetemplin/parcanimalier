<div class="col_12">
<!-- Breadcrumbs -->
<ul class="breadcrumbs">
<li><a href="./index.php?page=park_home&langue=en">Home</a></li>
<li>Contact us</li>
</ul>
	<p>Our address is <strong><?php echo $adresse_postale; ?></strong> (map available <a href="./index.php?page=access_map&langue=en">here</a>), and our phone number is <strong><?php echo $telephone_en; ?></strong>. You can also use this form to contact us :</p>
	<form class="vertical">
	<div class="col_4">

	<label for="Fisrtname">Nom</label>
	<input id="Firstname" type="text" placeholder="Your firstname" required/>
	
	<label for="Lastname">Prénom</label>
	<input id="Lastname" type="text" placeholder="Your lastname" required/>

	<label for="Email">E-mail</label>
	<input id="Email" type="email" placeholder="Your e-mail" required/>
	
	<label for="Message">Your message</label>
	<textarea id="Message" placeholder="Your message" required></textarea><br />
	
	<button>Send your message</button>
		
	</div>
	</form>
</div>
