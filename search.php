<?php

function ahpl_admin_search( $query )
{
    $s = $query->query_vars['s'];

    if( is_admin() && $query->is_search && (strpos($s,"slug")) !== false) {
        $query->query_vars['s'] = '';
        $search_slug = explode(":", $s);

        // avoid to isset
        if (count($search_slug) !== 2) return '';

        $slug = trim($search_slug[0]);
        if ($slug === 'slug') {
            $post_name = trim($search_slug[1]);
            $query->set( 'post_type', $query->get('post_type') );
            $query->set('post_name__in', (array)$post_name);
            add_filter( 'get_search_query', function( $val ) use ($post_name) {
                return $post_name ;
            } );
        }
    }
    return '';
}
add_action( 'pre_get_posts', 'ahpl_admin_search' );
