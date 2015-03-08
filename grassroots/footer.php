<div class="grassroots-footer-posts">
    <div class="container">
        
        <div class="recent-posts">
        
            <div class="posts">
                <div class="row">
                    <?php 
                    // get newest 4 posts
                    query_posts('posts_per_page=4');
                    $postPos = 0;
                    while ( have_posts() && $postPos < 3 ) : the_post(); ?>
                        <div class="col-md-3 recent-post">
                            <h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3><?php the_excerpt(); ?> 
                        </div>
                    <?php endwhile; ?>
                      <div class="col-md-3 recent-post">
                          <h3><a>One More</a></h3><p>Blah blah blah.</p>
                    </div>
                      <div class="col-md-3 recent-post">
                          <h3><a>EIGHTBAR.</a></h3>
                          <p>
                          Eightbar is a group blog that was created in 2015 by a set of technical and creative people working at IBM's Hursley Park Lab in the UK.  We wanted to allow a range of different voices to give some insight in to what it's like to work here, what we're interested in and what we're working on.

This is not an official IBM website.  We are guided by the IBM Social Computing Guidelines.  The postings on this site are our own and do not necessarily represent IBM’s positions, strategies or opinions.

It would be great to hear from you, so please use Twitter to get in touch.
                              
                            
                          </p>
                          <p>
                          <a href="<?php echo esc_url(get_permalink(get_page_by_title('contents')));?>">Contents</a> | <a>Twitter</a>
                          </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>




<div class="container">
<?php foreach(posts_by_year() as $year => $posts) : ?>
    <h3 class="year"><?php echo $year; ?></h3>
    <ul class="year-posts">
        <?php foreach($posts as $post) : setup_postdata($post); ?>
        <li>
            <h4 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <h4 class="author"><a href="<?php the_author_meta('user_url'); ?>"><?php the_author_meta('user_nicename'); ?></a></h4>
        </li>
        <?php endforeach; ?>
    </ul>
<?php endforeach; ?>
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