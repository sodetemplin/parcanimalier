<div id="footer">
	<a href="../"><span class="icon gray small" data-icon="I"></span></a> - &copy; Copyright <?php echo date('Y'); ?> - <?php $titre_page = (isset($_GET['langue']) ? $titre_site_par_langues[$_GET['langue']] : $titre_site_par_langues[$langue_par_defaut] ); echo $titre_page; ?> - Phone : <?php echo $telephone_en; ?> - Email : <?php echo $mail_contact; ?><a id="link-top" href="#top-of-page">Back to top</a>
</div>
