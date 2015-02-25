<?php get_header(); ?>
<body>

<?php foreach(posts_by_year() as $year => $posts) : ?>
    <h2><?php echo $year; ?></h2>
    <ul>
        <?php foreach($posts as $post) : setup_postdata($post); ?>
        <li>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>
        <?php endforeach; ?>
    </ul>
<?php endforeach; ?>

</body>
<?php get_footer(); ?>
