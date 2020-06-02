<?php
    // Template Name: Página Exemplo
    get_header(); 
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="container">

        <h1> <?php the_title(); ?> </h1>
        
        <?php the_content(); ?>

    </div>

<?php endwhile; else : endif ?>

<?php get_footer(); ?>