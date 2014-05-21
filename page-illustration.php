<?php
/*
 * Template Name: My Illustrations
 * Description: A Page Template with a darker design.
 */

//

?>

<?php get_header(); ?>


<div class="stay-put"> <!-- bio content -->
	
        <div class="row">
            <div style="text-align: center;" class="medium-12 columns single-project">
                <h2>My Illustrations</h2>
                <div class="liner"></div>
                <h3>Illustrations</h3>               
            </div>
        </div>
</div>

<div style="margin-top: 300px;" class="stage"> <!-- curtain pull -->
	<div class="wrap"> <!-- start wrap -->
            <div class="row"> <!-- start row -->

            <?php query_posts(' p=313 '); if(have_posts()) : while(have_posts()) : the_post(); ?> <!-- starting the WordPress loop -->

            <div class="medium-6 columns">
                    <a href="cat=3&tag=human"> <!-- link wrap -->
                        <div class="view view-tenth">
                            <?php 
                            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                              the_post_thumbnail();
                            } 
                            ?>
                            <div class="mask">
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_excerpt(); ?></p> 
                                <div class="liner"></div>
                                <a href="index.php?page_id=85" class="info">View More</a>
                            </div>
                        </div>
                    </a> <!-- link end wrap -->
                </div>

            <?php endwhile; ?>

            <?php else : ?>
                <p>Whoops! We are working on it.</p>

            <?php endif; ?> <!-- end loop -->

            <?php query_posts(' p=311 '); if(have_posts()) : while(have_posts()) : the_post(); ?> <!-- starting the WordPress loop -->

            <div class="medium-6 columns">
                    <a href="cat=3&tag=animal"> <!-- link wrap -->
                        <div class="view view-tenth">
                            <?php 
                            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                              the_post_thumbnail();
                            } 
                            ?>
                            <div class="mask">
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_excerpt(); ?></p> 
                                <div class="liner"></div>
                                <a href="index.php?page_id=88" class="info">View More</a>
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