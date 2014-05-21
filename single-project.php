<?php get_header(); ?>


	<div class="stay-put"> <!-- bio content -->
		
		<div class="row">
	  		<div style="text-align: center;" class="medium-12 columns single-project">
	  			<h2><?php the_title(); ?></h2>
	 			<div class="liner"></div>	  			
	 			<h3><?php the_excerpt(); ?></h3>
	  		</div>
		</div>

	</div>

	<div class="stage-single"> <!-- curtain pull -->
		<div class="wrap">
			<div class="row">
	  		<div class="medium-12 columns">
	  		<div class="play-that"> <!-- play that start -->	
	  			<div class="view-single view-tenth">               

					<iframe src="http://player.vimeo.com/video/33885857?autoplay=1title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 


<!-- I think this makes the custom field work -->
					<?php
					// Get the video URL and put it in the $video variable
					$videoID = get_post_meta($post->ID, 'video_url', true);
					// Check if there is in fact a video URL
					if ($videoID) {
						echo '<div class="videoContainer">';
						// Echo the embed code via oEmbed
						echo wp_oembed_get( 'http://vimeo.com/' . $videoID ); 
						echo '</div>';
					}
					?>

<!-- end of custom field shit see link: http://mor10.com/simple-video-embedding-with-custom-fields-in-wordpress-youtube/ -->

                </div> <!-- end play that start -->	
            </div>    
	  		</div>
	  		
	  		</div>
	  		</div>

	  	</div>

		<div class="wrap">

			<div class="next-up">
			
				<a style="background-image: url(images/the-frog-thumb.jpg); background-size: cover;" class="next-song" href="single-project.html">

					<div class="next"></div>

				</a>
				
				<a style="background-image: url(images/a-moose-thumb.jpg); background-size: cover;" class="previous-song" href="single-project.html">

					<div class="previous"></div>

				</a>

			</div>

		</div>

</div> 
</div>


	  		</div>
  		</div>
	</div>


	</div>

<?php get_footer(); ?>