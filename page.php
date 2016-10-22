<?php get_header();?>
<div class="pages" style="background-color:#FFF">
<div class="title">
<div class="breadcrumb">
<?php
echo do_shortcode( '[breadcrumb]' ); 
?>
</div>
<?php wp_title(''); ?>
</div>
<div class="clearfix"></div>
<div class="row row-eq-height" style="width:100%">
<div class="cont col-md-9">
<?php the_post(); the_content(); ?>
</div>
<div class="ticbar col-md-3" style="padding-top:20px;background-color:#FFF">



<div class="search">
<?php get_search_form( $echo ); ?>
</div>
<div class="hmenu">
<ul>
<?php
function has_subpage ()
{
global $post;
$pages = get_pages("sort_column=menu_order&depth=1&child_of={$post->ID}");
if ($pages) return TRUE;
}
$ch = get_the_title($post);
  		if($post->post_parent)
{
		$par = get_the_title($post->post_parent);
		echo "<li>";
  		echo $par;
}
  		else if(has_subpage())
{
  		echo "<li>";
		echo $ch;
}
 ?>


<?php inner_page_menu(); ?>
</li>
</ul>
</div>
<ul class="tick">
<ul>
<li class="pagenav">Recent Events
<ul>
<?php
			
			$catquery = new WP_Query( 'category_name=Events' ); 
			$i = 0 ;
			while ($catquery->have_posts() && $i < 3) : $catquery->the_post(); ?>
        <li>			<span class="glyphicon glyphicon-calendar" style="float:left;padding-top:5px"></span>
               <p class="post_title" align="justify" style="vertical-align:middle"><a href=" <?php the_permalink(); ?> "><?php the_title(); $i++;?></a><br/></p>
				</li>
			<?php endwhile; ?>
</ul>
</li></ul>
</ul>
</div></div>
</div>
<div class="clearfix"></div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>