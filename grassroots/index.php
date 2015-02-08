<?php get_header(); ?>

<div class="container">

    <?php 
    if ( have_posts() ) : 

        // Start the loop.
        while ( have_posts() ) : the_post();
        ?> 

            <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>
            <div class="entry"><?php the_content(); ?></div>

        <?php	
        // End the loop.
        endwhile;


    // If no content, include the "No posts found" template.
    else :
    ?> 

    <?php
    endif;
    ?>
    
</div>
    
<?php get_footer(); ?>
