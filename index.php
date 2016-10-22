<?php get_header(); ?>
<div class="home" style="background-color:#FFF;margin-top:-15px;">	
<?php	
		if ( have_posts() ) :
			while (have_posts()) : the_post(); ?>
          <div class="posting">
			<div class="postpic">	
           <?php     if(has_post_thumbnail())
		   {
			   the_post_thumbnail();
		   }
		    ?> </div>
               <p class="post_title" style="vertical-align:middle"><a href=" <?php the_permalink(); ?> "><?php the_title(); ?></a><br/></p>
				</div>
			<?php endwhile;
		else : ?>

			

		<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>