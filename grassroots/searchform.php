<form method="get" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<div><input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" x-webkit-speech speech onwebkitspeechchange="this.form.submit();" />
<input type="submit" id="searchsubmit" value="Search" />
</div>
</form>