<?php
//GUTENBERG SUPPORT
add_theme_support( 'align-wide' );
add_theme_support( 'responsive-embeds' );
//HTML 5 SUPPORT
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
//HIDE ADMIN BAR FROM FRONT END
show_admin_bar(false);
//TITLE TAG SUPPORT
add_theme_support( 'title-tag' );
//ALLOW POSTS AND PAGES FEATURED IMAGE
add_theme_support('post-thumbnails');
//ADD RSS/ATOM SUPPORT
add_theme_support( 'automatic-feed-links' );
//ADD TAG SUPPORT TO PAGES
function tags_support_all() {
    register_taxonomy_for_object_type('post_tag', 'page');
}
//DISABLE EMOJI BLOAT
function disable_wp_emoji() {
//REMOVE ALL ACTIONS USING EMOJI
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
//REMOVE EDITOR EMOJIS
add_filter( 'tiny_mce_plugins', 'disable_emoji_tinymce' );
  
//REMOVE DNS PREFETCH
add_filter( 'emoji_svg_url', '__return_false' );
}
add_action( 'init', 'disable_wp_emoji' );
function disable_emoji_tinymce( $plugins ) {
if ( is_array( $plugins ) ) {
	return array_diff( $plugins, array( 'wpemoji' ) );
} else {
	return array();
}}
//REMOVE THE TYPE ATTRIBUTE FROM JAVASCRIPT FILES
add_action('wp_loaded', 'prefix_output_buffer_start');
function prefix_output_buffer_start() { 
	ob_start("prefix_output_callback"); 
}
add_action('shutdown', 'prefix_output_buffer_end');
function prefix_output_buffer_end() { 
	ob_end_flush(); 
}
function prefix_output_callback($buffer) {
	return preg_replace( "%[ ]type=[\'\"]text\/(javascript|css)[\'\"]%", '', $buffer );
}
//INCLUDE TAGS IN SEARCH QUERIES
function tags_support_query($wp_query)
{
    if ($wp_query->get('tag'))
        $wp_query->set('post_type', 'any');
}
//TAG HOOKS
add_action('init', 'tags_support_all');
add_action('pre_get_posts', 'tags_support_query');
// REMOVE WP VERSION PARAM FROM ENQUEUED SCRIPTS AND CSS
function vc_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
//BEGIN READ MORE BUTTON ON TAGS AND BLOG
function excerpt_read_more_link($output)
{
    global $post;
    return $output . '<a class="btn btn-blue text-uppercase" href="' . get_permalink() . '">Read More <i class="fas fa-angle-double-right fa-fw fa-lg"></i></a>';
}
add_filter('the_excerpt', 'excerpt_read_more_link');
//REMOVE COMMENTS FEED RSS
add_filter( 'feed_links_show_comments_feed', '__return_false' );

//REMOVE WP VERSION FROM CODE
function livingston_remove_version() {
return '';
}
add_filter('the_generator', 'livingston_remove_version');
//REMOVE YOAST SEO COMMENTS
add_filter( 'wpseo_debug_markers', '__return_false' );

//ACF OPTIONS PAGE
if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Global Theme Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'livingston-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
}

//DISABLE GUTENBERG CSS
add_action( 'wp_print_styles', 'wps_deregister_styles', 100 );
function wps_deregister_styles() {
    wp_dequeue_style( 'wp-block-library' );
}


//** *Enable upload for webp image files.*/
function webp_upload_mimes($existing_mimes) {
    $existing_mimes['webp'] = 'image/webp';
    return $existing_mimes;
}
add_filter('mime_types', 'webp_upload_mimes');
//** * Enable preview / thumbnail for webp image files.*/
function webp_is_displayable($result, $path) {
    if ($result === false) {
        $displayable_image_types = array( IMAGETYPE_WEBP );
        $info = @getimagesize( $path );

        if (empty($info)) {
            $result = false;
        } elseif (!in_array($info[2], $displayable_image_types)) {
            $result = false;
        } else {
            $result = true;
        }
    }

    return $result;
}
add_filter('file_is_displayable_image', 'webp_is_displayable', 10, 2);

//REMOVE TWITTER AUTHOR INFO
function wpf13625975_yoast_remove_username_metatag( $tag_arr ) {
    
    if( isset( $tag_arr['Written by'] ) ) {
        unset( $tag_arr['Written by'] );
    }
    
    return $tag_arr;
    
}
add_filter( 'wpseo_enhanced_slack_data', 'wpf13625975_yoast_remove_username_metatag' );