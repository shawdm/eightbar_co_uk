<div class="grassroots-footer-posts">
    <div class="container">
        
        <div class="recent-posts">
        
            <div class="posts">
                <div class="row">
                    <?php 
                    // get newest 4 posts
                    query_posts('posts_per_page=3');
                    while ( have_posts()) : the_post(); ?>
                        <div class="col-md-3 recent-post">
                            <h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3><?php the_excerpt(); ?> 
                        </div>
                        
                    <?php endwhile; ?>
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
<?php foreach(eb_posts_by_year() as $year => $posts) : ?>
    <h2 class="year"><?php echo $year; ?></h2>
    <div class="columns">
        <ul class="year-posts">
            <?php foreach($posts as $post) : setup_postdata($post); ?>
            <li>
                <h4 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> <?php echo eb_excerpt(); ?> 
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endforeach; ?>
</div>


</body>
</html>