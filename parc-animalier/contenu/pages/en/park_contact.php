<div class="col_12">
<!-- Breadcrumbs -->
<ul class="breadcrumbs">
<li><?php echo traduction($langue,'lien_accueil'); ?><?php echo traduction($langue,'accueil'); ?></a></li>
<li><?php echo traduction($langue,'contact_parc_texte1'); ?></li>
</ul>
	<div class="col_9">
		<p><?php echo traduction($langue,'contact_parc_texte2'); ?> <strong><?php echo traduction($langue,'telephone'); ?></strong>. <?php echo traduction($langue,'contact_parc_texte3'); ?> <strong><?php echo email(''); ?></strong>. <?php echo traduction($langue,'contact_parc_texte4'); ?> :</p>
		<address><?php echo $adresse_postale; ?></<address>		
	</div>
	<div class="col_3">
		<?php echo traduction($langue,'lien_plan_acces'); ?><button class="medium green"><?php echo traduction($langue,'contact_parc_texte5'); ?></button></a>
	</div>
</div>
