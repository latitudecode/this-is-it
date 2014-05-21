<?php
/*
 * Template Name: Contact Me
 * Description: A Page Template with a darker design.
 */

//

?>

<?php get_header(); ?>

<div class="stay-put"> <!-- bio content -->

<?php query_posts('page_id=90'); if(have_posts()) : while(have_posts()) : the_post(); ?> <!-- starting the WordPress loop -->


	<div class="row">
  		<div class="medium-6 medium-push-4 columns">
  			<h2><?php wp_title(''); ?></h2>
 			<h3><?php bloginfo('description'); ?></h3>
 			<p><?php the_content('index.php?page_id=90'); ?></p>
  		    <h3><a href="tel:16032965184 ">603.296.5184</a> | <a href="mailto:lily@lilyfeatherston.com">lily@lilyfeatherston.com</a></h3>   
        </div>
 		<div class="medium-4 small-7 small-pull-5 medium-pull-7 columns">
 			<div class="circular-image">
                <?php 
                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                  the_post_thumbnail();
                } 
                ?>
 			</div>
 		</div>
	</div>
</div>   

<?php endwhile; ?>

<?php else : ?>
    <p>Whoops! We are working on it.</p>

<?php endif; ?> <!-- end loop -->


<div class="stage"> <!-- curtain pull -->
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