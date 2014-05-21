<?php




add_theme_support( 'post-thumbnails' ); 

wp_insert_term( $term, $taxonomy, $args = array() );


add_theme_support( 'post-thumbnails' ); 

 if (class_exists('MultiPostThumbnails')) {
        new MultiPostThumbnails(
            array(
                'label' => 'Secondary Image',
                'id' => 'secondary-image',
                'post_type' => 'post'
            )
        );
    }


?>
