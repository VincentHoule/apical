<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
    </head>
    <?php get_header();?>
        <div id="corps">
        <?php get_template_part('content');?>
        </div>
    <?php get_footer();?>
</html>