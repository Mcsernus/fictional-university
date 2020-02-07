<?php 
get_header();
/*wordpress is going to look for individual posts in single.php*/
while (have_posts()) {

the_post(); ?>

<h2><?php the_title(); ?></h2>
<?php the_content(); ?>
<?php }
get_footer();
?>