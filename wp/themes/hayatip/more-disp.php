<?php

require_once("/WP PATH/wp-config.php");

$now_post_num = $_POST['now_post_num'];
$get_post_num = $_POST['get_post_num']+1;
$get_post_str = $_POST['get_post_str'];
 
if (empty($get_post_str)){
    $results = $wpdb->get_results($wpdb->prepare("
        SELECT
            $wpdb->posts.ID,
            $wpdb->posts.post_author,
            $wpdb->posts.post_title,
            $wpdb->posts.post_content
        FROM $wpdb->posts
        WHERE $wpdb->posts.post_type = 'post' AND $wpdb->posts.post_status = 'publish' 
        ORDER BY 
            $wpdb->posts.post_date DESC 
        LIMIT $now_post_num, $get_post_num
        "));
} elseif (preg_match('/^\?s=/',$get_post_str)) {
    $keyword = str_replace('?s=','', $get_post_str);
    $keyword = urldecode($keyword);
    $keyword = '%'.like_escape( $keyword ).'%';
    $results = $wpdb->get_results($wpdb->prepare("
        SELECT
            $wpdb->posts.ID,
            $wpdb->posts.post_author,
            $wpdb->posts.post_title,
            $wpdb->posts.post_content
        FROM $wpdb->posts
        WHERE $wpdb->posts.post_type = 'post' AND $wpdb->posts.post_status = 'publish' AND $wpdb->posts.post_title LIKE %s
        ORDER BY 
            $wpdb->posts.post_date DESC 
        LIMIT $now_post_num, $get_post_num
        ",$keyword));
} else {
    $results = $wpdb->get_results($wpdb->prepare("
        SELECT
            $wpdb->posts.ID,
            $wpdb->posts.post_author,
            $wpdb->posts.post_title,
            $wpdb->posts.post_content,
            $wpdb->terms.name
        FROM $wpdb->posts
        JOIN $wpdb->term_relationships ON $wpdb->term_relationships.object_id = $wpdb->posts.ID
        JOIN $wpdb->term_taxonomy ON $wpdb->term_taxonomy.term_taxonomy_id = $wpdb->term_relationships.term_taxonomy_id
        JOIN $wpdb->terms ON $wpdb->terms.term_id = $wpdb->term_taxonomy.term_id
        WHERE $wpdb->posts.post_type = 'post' AND $wpdb->posts.post_status = 'publish' AND $wpdb->terms.slug = '$get_post_str'
        ORDER BY 
            $wpdb->posts.post_date DESC 
        LIMIT $now_post_num, $get_post_num
        "));
}

if ( count($results) < $get_post_num ) {
    $noDataFlg = 1;
} else {
    $noDataFlg = 0;
    array_pop($results);
}

$html = "";
foreach ($results as $value) {
    $html .= '<div class="card callout">';
    $html .= '<div class="row">';
    $html .= '<div class="large-3 medium-3 small-3 columns"><p>'.get_the_post_thumbnail($value->ID).'</p></div>';
    $html .= '<h5><a href="'.get_permalink($value->ID).'">'.apply_filters('the_title', $value->post_title).'</a></h5>';
    $html .= '<p class="excerpt">'.mb_substr(strip_tags($value-> post_content),0,100).'...</p>';
    $html .= '<p class="posted text-right">'.' '.get_the_date( 'Y.m.d', $value->ID ).' '.get_the_author_meta('display_name', $value->post_author ).' '.get_avatar($value->post_author,35).'</p>';
    $html .= '</div>';
    $html .= '</div>';
    $html .= '</div>';
}
 
$returnObj = array();
$returnObj = array(
    'noDataFlg' => $noDataFlg,
    'html' => $html,
);
$returnObj = json_encode($returnObj);
 
echo $returnObj; 
?>