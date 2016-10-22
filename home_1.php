<?php get_header(); ?>
<div class="home">
<div class="clearfix"></div>
<span style="margin-top:-23px !important;box-sizing:box !important;" >
<?php 
    echo do_shortcode("[metaslider id=1681]"); 
?>
</span>
<div class="news">
<div class="container" style="margin-top:-10px;width:1200px">
	<div class="row row-eq-height">
		<div class="col-md-4" style="text-align:center;background-color:#FFFFFF;padding:10px 10px 10px 10px;box-sizing:border-box;border-left:#E5E4DE 1px solid;height:500px">
        <h2 style="color:#32373C"> News </h2>
        	<?php
			
			$catquery = new WP_Query( 'category_name=News' ); 
			$i = 0 ;
		if ( have_posts() ) :
			while ($catquery->have_posts() && $i < 3) : $catquery->the_post(); ?>
          <div class="posting">
			<div class="postpic">	
           <?php     if(has_post_thumbnail())
		   {
			   the_post_thumbnail();
		   }
		    ?> </div>
               <p class="post_title" align="justify" style="vertical-align:middle"><a href=" <?php the_permalink(); ?> "><?php the_title(); $i++;?></a><br/></p>
				</div>
			<?php endwhile;
		else : ?>

			

		<?php endif; ?>
<a href="http://www.kit-edu.in/site/category/news/" class="btn btn-primary" style="padding-top:5px;" >More<span class="glyphicon glyphicon-arrow-right"></span></a>
        </div>
        <div class="col-md-4" style="text-align:center;background-color:#FFFFFF;padding:10px 10px 10px 10px;box-sizing:border-box;border-left:#E5E4DE 1px solid;height:500px">
        <h2 style="color:#32373C"> Events</h2>
       <?php
			
			$catquery = new WP_Query( 'category_name=Events' ); 
			$i = 0 ;
		if ( have_posts() ) :
			while ($catquery->have_posts() && $i < 3) : $catquery->the_post(); ?>
          <div class="posting">
			<div class="postpic">	
           <?php     if(has_post_thumbnail())
		   {
			   the_post_thumbnail();
		   }
		    ?> </div>
               <p class="post_title" align="justify" style="vertical-align:middle"><a href=" <?php the_permalink(); ?> "><?php the_title(); $i++;?></a><br/></p>
				</div>
			<?php endwhile;
		else : ?>

			

		<?php endif; ?>

<a href="http://www.kit-edu.in/site/category/events/"style="padding-top:5px;" class="btn btn-primary" >More<span class="glyphicon glyphicon-arrow-right"></span></a>
        </div>
        <div class="col-md-4" style="text-align:center;background-color:#FFFFFF;padding:10px 10px 10px 10px;;box-sizing:border-box;border-left:#E5E4DE 1px solid;height:500px">
        <h2 style="color:#32373C"> Spotlights</h2>
<div class="container-fluid">
	<div class="row">
	
		<div class="col-md-12" style="text-align:center;background-color:#FFFFFF;padding:5px 10px 10px 5px;margin-right:10px;box-sizing:border-box;">
	<a href="http://kit-edu.in/site/development" style="text-decoration:none;color:#FFF">		 
			<button type="button" class="btn btn-cust">
<img src="http://kit-edu.in/site/wp-content/uploads/2015/08/people-in-360-degree-510.gif" height="74px" width="100%" /><br/><br/>
					<i class="fa fa-book"></i>&nbsp;360&deg Development&nbsp;<i class="fa  fa-chevron-right"></i>
			</button></a>
		</div>
		
<div class="col-md-12" style="text-align:center;background-color:#FFFFFF;padding:5px 10px 10px 5px;margin-right:10px;box-sizing:border-box;">
	<a href="http://kit-edu.in/site/placement" style="text-decoration:none;color:#FFF">		 
			<button type="button" class="btn btn-cust">
<img src="http://kit-edu.in/site/wp-content/uploads/2015/08/slide71.jpg" height="74px" width="100%" /><br/><br/>
					<i class="fa fa-book"></i>&nbsp;Placements&nbsp;<i class="fa  fa-chevron-right"></i>
			</button></a>
		</div>
	</div>
</div></div>
      </div></div>
<div class="news">
<div class="container" style="background-color:#DC9C1C;width:1200px;margin-top:-10px;padding:20px 20px 20px 20px">
<div class="col-md-5" style="width:480px">
<iframe width="100%" height="300px"  src="http://www.youtube.com/embed/6jbm-VOME2Q" frameborder="0" allowfullscreen></iframe>

</div>
<div class="col-md-7" style="width:680px">
<h1 align="center" style="color:#FFFFFF">Welcome to KIT</h1>
<p align="justify" style="font-family:Arial, Helvetica, sans-serif;font-size:18px">Kalasalingam Institute of Technology is situated in a serene campus surrounded by scenic mountainous setting at Krishnankoil. The college is located 60 Kms south of Madurai and 10 Kms north of Srivilliputtur on Madurai–Senkottai Highway. The college is a quiet retreat, away from the distractions and disturbances of a large and modern city, ideal for concentrated study. Shielded on four sides by Nature’s ever green slopes, the grass so finest and providing a welcoming green carpet, each season has a special message to say and each morning has a special greet to give. 
</p>
</div>

</div>
 </div></div>

 <?php get_sidebar(); ?>
 <?php get_footer(); ?>