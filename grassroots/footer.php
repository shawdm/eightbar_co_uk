<div class="grassroots-footer-posts">
    <div class="container">
        
        <div class="recent-posts">
        
            <div class="posts">
                <div class="row">
                    <?php 
                    rewind_posts();
                    $postPos = 0;
                    while ( have_posts() && $postPos < 4 ) : the_post(); ?>
                        <div class="col-md-3 recent-post">
                            <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2><?php the_excerpt(); ?> 
                        </div>
                    <?php endwhile; ?>
                    
            
                </div>
            </div>
        </div>

    </div>
</div>


<!--
<div class="grassroots-footer">
    <div class="container">

        
        <div class="about">
            <h2>EIGHTBAR</h2>
            <p>
                We’re a group of techie/creative people working in and around IBM’s Hursley Park Lab in the UK. We have regular technical community meetings, well more like a cup of tea and a chat really, about all kinds of cool stuff. One of the things we talked about is that although there are lots of cool people and projects going on in Hursley, we never really let anyone know about them. So, we decided to try and record some of the stuff that goes on here in an unofficial blog: eightbar.
            </p>

            <p>
                The plan is to give a bit of a UK flavour to it all, but talk about the technology coming out of the lab, things people are playing with, but also some of the fun side. Hursley’s a very unusual place (compared to most technology sites), so we want to get that across. Anyway, hopefully lots of different people who work in and around Hursley will contribute.
            </p>

            <p>
                Changes to Eightbar happened during 2012! The Eightbar blog page was set up in the summer of 2005 with our first posts arriving in September that year. Our bloggers contributed by writing posts directly for the Eightbar blog. However, opinions of our community have changed towards being able to post to our own blogs and syndicate content to Eightbar. We now have both a “planet” style blog but also maintain the ability to post directly to Eightbar.
            </p>
            <p>
                This is not an official IBM blog, we are guided by the IBM Social Computing Guidelines and would therefore like to inform you that the postings on this site are our own and don’t necessarily represent IBM’s positions, strategies or opinions.
            </p>
        </div>
        

        
        <div class="contact">
            <h2>Hello!</h2>
            <p>
            Get in touch via Twitter or Email.
            </p>   
        </div>
    </div>
</div>
-->


</body>
</html>