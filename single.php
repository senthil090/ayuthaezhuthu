<?php 
get_header(); ?>
<div class="blog">
<div class="title">
<h1>
<?php
single_post_title(); 
?></h1></div>
<div class="cont">
<?php
the_post();
the_content();
?>
<div class="prev btn btn-default">
<?php previous_post_link('Previous'); ?>
</div>
<div class="next btn btn-default">
<?php next_post_link('Next'); ?>
</div></div>
</div>
<?php get_sidebar(); ?>
<?php get_footer();?>