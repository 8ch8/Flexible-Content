<?php 

/* Template Name: Backbeach */

get_header();?>

<section class="page">
    <div class="container">
 
        <h1><?php the_title();?></h1>


        <?php if( have_rows('flexible_template') ):?>

            <?php while( have_rows('flexible_template') ): the_row();?>
                    
                    <?php get_template_part( 'flexible-templates/' . get_row_layout() );?>

            <?php endwhile;?>

        <?php endif;?>

    </div>
</section>

<?php get_footer();?>