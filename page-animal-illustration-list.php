<?php
/*
 * Template Name: Animal Illustrations list
 * Description: A Page Template with a darker design.
 */

//

?>

<?php get_header(); ?>

<div class="illustrations">
<div class="stay-put"> <!-- bio content -->
	
        <div class="row">
            <div style="text-align: center;" class="medium-12 columns single-project">
                <h2>My Illustrations</h2>
                <div class="liner"></div>
                <h3>Animals</h3>                               
            </div>
        </div>
</div>

<div style="margin-top: 300px;" class="stage"> <!-- curtain pull -->
	<div class="wrap"> <!-- start wrap -->
            <div class="row"> <!-- start row -->

            <?php query_posts(array('showposts'=> 50,'cat' => 3,'tag' => animal, 'post__not_in' => array(313))); if(have_posts()) : while(have_posts()) : the_post(); ?> <!-- starting the WordPress loop -->



             <div class="medium-4 columns">
                    <a href="<?php the_permalink(); ?>"> <!-- link wrap -->
                        <div class="view view-tenth">

                        <?php if (class_exists('MultiPostThumbnails')) : MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image'); endif; ?>

                            <div class="mask">
                                <div class="liner"></div>
                                <?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                                
                                <a href="<?php echo $featuredImage; ?>" rel="shadowbox" class="info" class="info">View More</a> 
                               
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
</div>

<?php get_footer(); ?>