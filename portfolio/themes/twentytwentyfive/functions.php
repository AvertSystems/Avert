// My custom styles
add_action( 'init', 'twentytwentyfive_enqueue_block_styles' );

function twentytwentyfive_enqueue_block_styles() {
        wp_enqueue_block_style( 'core/group', array(
                'handle' => 'twentytwentyfive-block-group',
                'src'    => get_theme_file_uri( "assets/blocks/core-group.css" ),
                'path'   => get_theme_file_path( "assets/blocks/core-group.css" )
        ) );
}
add_action( 'init', 'twentytwentyfive_enqueue_block_styles' );

/* function twentytwentyfive_enqueue_block_styles() {
        wp_enqueue_block_style( 'core/navigation', array(
                'handle' => 'twentytwentyfive-block-navigation',
                'src'    => get_theme_file_uri( "assets/blocks/core-navigation.css" ),
                'path'   => get_theme_file_path( "assets/blocks/core-navigation.css" )
       ) );
} */
// My HTML styles
/* add_action( 'init', 'twentytwentyfive_enqueue_block_styles' );

function twentytwentyfive_enqueue_block_styles() {
        wp_enqueue_block_style( 'core/html', array(
                'handle' => 'twentytwentyfive-block-group',
                'src'    => get_theme_file_uri( "assets/blocks/core-html.css" ),
                'path'   => get_theme_file_path( "assets/blocks/core-html.css" )
        ) );
} */
