<?php get_header(); ?>

<div class="container post">
    <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="">
    <?php the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <p><?php the_content(); ?></p>

</div>



 
 <?php get_footer(); ?>