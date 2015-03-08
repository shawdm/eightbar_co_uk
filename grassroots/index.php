<?php get_header(); ?>

<div class="container">

    <?php
    if ( have_posts() ) : 

        // Start the loop.
        while ( have_posts() ) : the_post();
        ?> 

            <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            
            <div class="entry"><?php the_content(); ?></div>
    
            <div class="meta"><h4><?php the_time('F jS, Y'); ?></h4> <h4>by</h4> <h4 class="author"><a href="<?php the_author_meta('user_url'); ?>"><?php the_author_meta('user_nicename'); ?></a></h4></div>

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
