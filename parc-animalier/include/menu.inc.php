	<ul class="menu">
	<li <?php if ($_SERVER['QUERY_STRING'] == "page=accueil_parc") echo 'class="current"'; else echo ''; ?>><a href="./index.php?page=accueil_parc"><span class="icon" data-icon="I"></span>Accueil</a></li>
	<li <?php if ($_SERVER['QUERY_STRING'] == "page=faune_pyreneenne") echo 'class="current"'; else echo ''; ?>><a href="./index.php?page=faune_pyreneenne"><span class="icon" data-icon="G"></span>Faune des Pyrénées</a></li>
	<li <?php if ($_SERVER['QUERY_STRING'] == "page=flore_pyreneenne") echo 'class="current"'; else echo ''; ?>><a href="./index.php?page=flore_pyreneenne"><span class="icon" data-icon="G"></span>Flore des Pyrénées</a></li>
	<li <?php if ($_SERVER['QUERY_STRING'] == "page=contact_parc") echo 'class="current"'; else echo ''; ?>><a href="./index.php?page=contact_parc"><span class="icon" data-icon="@"></span>Contact et accès</a></li>
	</ul>

