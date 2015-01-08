<hr />
<div id="footer">
	<p>
		eightbar is powered by WordPress
                <br />
                <a href="feed:<?php bloginfo('atom_url'); ?>">Entries (Atom)</a> | 
                <a href="feed:<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a> |
		<a href="feed:<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a>
		<!-- <?php echo $wpdb->num_queries; ?> queries. <?php timer_stop(1); ?> seconds. -->
	</p>
</div>
</div>

<?php wp_footer(); ?>

<!-- Google analytics -->
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-1099656-2";
urchinTracker();
</script>
<!-- /Google analytics -->

</body>
</html>