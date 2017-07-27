<?php
/**
 * @package WordPress
 * @subpackage Codelation Default
 * @since Codelation Default 0.1
 */
get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<? endwhile ?>
<? endif ?>

<?php
get_footer();
