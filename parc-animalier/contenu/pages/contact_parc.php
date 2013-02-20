<div class="col_12">
<!-- Breadcrumbs -->
<ul class="breadcrumbs">
<li><a href="./index.php">Accueil</a></li>
<li>Nous écrire</li>
</ul>
	<p>Nous sommes situés à l'adresse <strong><?php echo $adresse_postale; ?></strong> (plan disponible <a href="./index.php?page=plan_acces&langue=fr">ici</a>), et joignable par téléphone au <strong><?php echo $telephone_fr; ?></strong>. Vous pouvez également nous écrire via ce formulaire :</p>
	<form class="vertical">
	<div class="col_4">

	<label for="Nom">Nom</label>
	<input id="Nom" type="text" placeholder="Votre nom" required/>
	
	<label for="Prenom">Prénom</label>
	<input id="Prenom" type="text" placeholder="Votre prénom" required/>

	<label for="Email">E-mail</label>
	<input id="Email" type="email" placeholder="Votre e-mail" required/>
	
	<label for="Texte">Votre message</label>
	<textarea id="Texte" placeholder="Votre message" required></textarea><br />
	
	<button>Envoyer</button>
		
	</div>
	</form>
</div>
