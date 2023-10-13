<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
</head>
<?php get_header();?>
<div id="corps">
    <div id="titre_gros_post">
    <hr id="ligne">
    <h1 id="titre_post">Mes articles</h1>
    <hr id="ligne">
    </div>

    <p>La page demandée n'existe pas. Voici les pages disponibles sur Apical :</p>

    <?php

   wp_list_pages(array(
       'sort_order'=>'DESC'
   ));

    ?>

</div>
    <?php get_footer();?>
</html>