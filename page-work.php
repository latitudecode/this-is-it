<?php
/*
 * Template Name: My Work
 * Description: A Page Template with a darker design.
 */

//

?>

<?php get_header(); ?>



<div class="stay-put"> <!-- bio content -->
	
        <div class="row">
            <div style="text-align: center;" class="medium-12 columns single-project">
                <h2>My Work</h2>
                <div class="liner"></div>               
                <h3>Animations</h3>
            </div>
        </div>
</div>

<div style="margin-top: 300px;" class="stage"> <!-- curtain pull -->
	<div class="wrap"> <!-- start wrap -->
        <div class="row"> <!-- start row -->

            <?php query_posts('cat=2'); if(have_posts()) : while(have_posts()) : the_post(); ?> <!-- starting the WordPress loop -->

                

                <div class="medium-4 columns">
                    <a href="<?php the_permalink(); ?>"> <!-- link wrap -->
                        <div class="view view-tenth">
                            <?php 
                            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                              the_post_thumbnail();
                            } 
                            ?>
                            <div class="mask">
                                <h2><?php the_title(); ?></h2>
                                <a href="<?php the_permalink() ?>" class="info">Watch Animation</a>
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




  		</div>
		</div>
</div>


</div>

<?php get_footer(); ?>