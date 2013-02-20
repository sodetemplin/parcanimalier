<div id="footer">
	<a href="../"><span class="icon gray small" data-icon="I"></span></a> - &copy; Tous droits réservés <?php echo date('Y'); ?> - <?php $titre_page = (isset($_GET['langue']) ? $titre_site_par_langues[$_GET['langue']] : $titre_site_par_langues[$langue_par_defaut] ); echo $titre_page; ?> - Tél : <?php echo $telephone_fr; ?> - Email : <?php echo $mail_contact; ?><a id="link-top" href="#top-of-page">Retour en haut</a>
</div>
