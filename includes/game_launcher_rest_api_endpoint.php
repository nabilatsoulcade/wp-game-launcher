<?php
add_action( 'rest_api_init', 'my_register_route');
function my_register_route() {

        register_rest_route( 'games', 'build-archive', array(
                'methods' => 'GET',
                'callback' => 'get_builds',
        ));
}

function get_builds() {

    // get the posts
    $args = array('post_type' => 'gamebuild');
    $posts_list = get_posts($args);
    $post_data = array();
    foreach( $posts_list as $posts) {

        //Get data for Json
        $post_id = $posts->ID;
        $build_title = $posts->post_title;
        $changelog = $posts->post_content;

        $gamename = get_post_meta($post_id, "game_name", true);
        $game_version = get_post_meta($post_id, "game_version_number", true);
        $game_filename = get_post_meta($post_id, "game_executable_name", true);
        $game_build_url = get_post_meta($post_id, "game_build_zip_file", true);

        //Build Json for Rest API
        $post_data[ $post_id ][ 'game_name' ] = $gamename;
        $post_data[ $post_id ][ 'build_name' ] = $build_title;
        $post_data[ $post_id ][ 'changelog' ] = $changelog;

        $post_data[ $post_id ][ 'game_version' ] = $game_version;
        $post_data[ $post_id ][ 'game_filename' ] = $game_filename;
        $post_data[ $post_id ][ 'game_zip_url' ] = $game_build_url;
    }
    wp_reset_postdata();
    return rest_ensure_response( $post_data );
}

?>
