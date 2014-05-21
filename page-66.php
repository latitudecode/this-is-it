<?php get_header(); ?>


<div class="stay-put"> <!-- bio content -->
	
	<div class="row">
  			<div style="text-align: center;" class="medium-12 columns single-project">
                <h2>My Work</h2>
                <div class="liner"></div>               
                <h3>Animation - Illustration</h3>
            </div>
	</div>
</div>

<div class="stage"> <!-- curtain pull -->
	<div class="wrap"> <!-- start wrap -->
        <div class="row"> <!-- start row -->

            <?php query_posts('cat=2'); if(have_posts()) : while(have_posts()) : the_post(); ?> <!-- starting the WordPress loop -->

                <div class="medium-4 columns">
                    <a href="<?php the_permalink(); ?>"> <!-- link wrap -->
                        <div class="view view-tenth">
                            <img src="<?php bloginfo('template_directory'); ?>/images/short-comings-thumb.jpg" />
                            <div class="mask">
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_excerpt(); ?></p> 
                                <div class="liner"></div>
                                <a href="single-project.html" class="info">Watch Animation</a>
                            </div>
                        </div>
                    </a> <!-- link end wrap -->
                </div>

            <?php endwhile; ?>

            <?php else : ?>
                <p>Whoops! We are working on it.</p>

            <?php endif; ?> <!-- end loop -->

  		</div> <!-- end row -->

  	</div> <!-- end wrap -->

<div class="wrap">
<div class="the-sketch-book">
<div class="sketching">My Sketchbook</div>
  	<div class="row"> <!-- start row -->
	       
            <?php query_posts('cat=3'); if(have_posts()) : while(have_posts()) : the_post(); ?> <!-- starting the WordPress loop -->

                <div class="medium-6 columns">
                    <a href="<?php the_permalink(); ?>"> <!-- link wrap -->
                        <div class="view view-tenth">
                            <img src="<?php bloginfo('template_directory'); ?>/images/short-comings-thumb.jpg" />
                            <div class="mask">
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_excerpt(); ?></p> 
                                <p>2012</p>
                                <div class="liner"></div>
                                <a href="single-project.html" class="info">Watch Animation</a>
                            </div>
                        </div>
                    </a> <!-- link end wrap -->
                </div>

            <?php endwhile; ?>

            <?php else : ?>
                <p>Shit! We are working on it.</p>

            <?php endif; ?> <!-- end loop -->

	</div> <!-- end row -->
</div> 
</div>


  		</div>
		</div>
</div>


</div>

<?php get_footer(); ?>