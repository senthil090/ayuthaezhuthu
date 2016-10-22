<?php get_header(); ?>
<div class="slider">
	<div class="slier_container">
	<?php 
    	echo do_shortcode("[metaslider id=8]"); 
	?>
	</div>
</div>
<div  class="post_container">
	<div class="col-md-8">
	<div class="card card-nav-tabs">
		<div class="header header-success redbackground">
			<div class="nav-tabs-navigation">
				<div class="nav-tabs-wrapper">
					<ul class="nav nav-tabs" data-tabs="tabs">
						<li class="active">
							<a href="#news" data-toggle="tab">
								<i class="fa fa-newspaper-o"></i>
									News
							</a>
						</li>
						<li class="">
							<a href="#events" data-toggle="tab">
								<i class="fa fa-calendar"></i>
									Events
								<div class="ripple-container"></div>
							</a>
						</li>
						<li>
							<a href="#quotes" data-toggle="tab">
								<i class="fa fa-quote-left"></i>
								Quotes
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="content">
			<div class="tab-content">
				<div class="tab-pane active" id="news">
					<div class="row">
						<?php
							$catquery = new WP_Query( 'category_name=News' ); 
							$i = 0 ;
							if ( have_posts() ) :
							while ($catquery->have_posts() && $i < 3) : $catquery->the_post(); 
						?>	
						<div class="col-md-2 text-center postpic">
		           			<?php     if(has_post_thumbnail())
				   							{
					   							the_post_thumbnail();
				   							}
				    		?>
			    		</div>
			    		<div class="col-md-10">
		              	 <div class="title"><a href=" <?php the_permalink(); ?> "><?php the_title(); $i++;?></a></div>
		              	 <div class="row">
		              	 	<div class="col-md-12"><?php the_excerpt(); ?></div>
		              	 </div>
		               </div>
						<?php endwhile;
							  else : ?>
						<?php endif; ?>	
					</div>
					<div class="row">
						<div class="col-md-12 text-right">
							<button class="btn btn-primary btn-round">
								<i class="fa fa-info-circle"></i> More
							<div class="ripple-container"></div>
						</button>
						</div>
					</div>				
				</div>
				<div class="tab-pane" id="events">
					<div class="row">
						<?php
							$catquery = new WP_Query( 'category_name=Events' ); 
							$i = 0 ;
							if ( have_posts() ) :
							while ($catquery->have_posts() && $i < 3) : $catquery->the_post(); 
						?>	
						<div class="col-md-2 text-center postpic">
		           			<?php     if(has_post_thumbnail())
				   							{
					   							the_post_thumbnail();
				   							}
				    		?>
			    		</div>
			    		<div class="col-md-10">
		              	 <div class="title"><a href=" <?php the_permalink(); ?> "><?php the_title(); $i++;?></a></div>
		              	 <div class="row">
		              	 	<div class="col-md-12"><?php the_excerpt(); ?></div>
		              	 </div>
		               </div>
						<?php endwhile;
							  else : ?>
						<?php endif; ?>	
					</div>
					<div class="row">
						<div class="col-md-12 text-right">
							<button class="btn btn-primary btn-round">
								<i class="fa fa-info-circle"></i> More
							<div class="ripple-container"></div>
						</button>
						</div>
					</div>
				</div>
				<div class="tab-pane" id="quotes">
					<div class="row">
							<?php
								$catquery = new WP_Query( 'category_name=Blog' ); 
								$i = 0 ;
								if ( have_posts() ) :
								while ($catquery->have_posts() && $i < 3) : $catquery->the_post(); 
							?>	
							<div class="col-md-2 text-center postpic">
			           			<?php     if(has_post_thumbnail())
					   							{
						   							the_post_thumbnail();
					   							}
					    		?>
				    		</div>
				    		<div class="col-md-10">
			              	 <div class="title"><a href=" <?php the_permalink(); ?> "><?php the_title(); $i++;?></a></div>
			              	 <div class="row">
			              	 	<div class="col-md-12"><?php the_excerpt(); ?></div>
			              	 </div>
			               </div>
							<?php endwhile;
								  else : ?>
							<?php endif; ?>	
						</div>
						<div class="row">
						<div class="col-md-12 text-right">
							<button class="btn btn-primary btn-round">
								<i class="fa fa-info-circle"></i> More
							<div class="ripple-container"></div>
						</button>
						</div>
					</div>
					</div>
			</div>
		</div>
	</div>	
	</div>
	<div  class="col-md-4">
		<?php get_sidebar(); ?>
	</div>

</div>

<?php get_footer(); ?>