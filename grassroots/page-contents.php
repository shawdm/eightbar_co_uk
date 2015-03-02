<?php get_header(); ?>
<body>

<div class="container">
<?php foreach(posts_by_year() as $year => $posts) : ?>
    <h2 class="year"><?php echo $year; ?></h2>
    <ul class="year-posts">
        <?php foreach($posts as $post) : setup_postdata($post); ?>
        <li>
            <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <h3 class="author"><a href="<?php the_author_meta('user_url'); ?>"><?php the_author_meta('user_nicename'); ?></a></h3>
        </li>
        <?php endforeach; ?>
    </ul>
<?php endforeach; ?>
</div>

</body>
<?php get_footer(); ?>
