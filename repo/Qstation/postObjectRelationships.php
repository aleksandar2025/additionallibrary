<?php

//depracted use elementor/posts/query/

add_action( 'elementor_pro/posts/query/bundle-kursevi', function ( $query ) { $postid = get_the_ID(); $ids = get_post_meta($postid, 'post_obj', true); if ( $ids ) { $query->set( 'post__in', $ids ); } } );
add_action( 'elementor_pro/posts/query/clanovi-tima', function ( $query ) { $postid = get_the_ID(); $ids = get_post_meta($postid, 'clanovi_tima', true); if ( $ids ) { $query->set( 'post__in', $ids ); } } );
add_action( 'elementor_pro/posts/query/tim-name', function ( $query ) { $postid = get_the_ID(); $ids = get_post_meta($postid, 'tim_name', true); if ( $ids ) { $query->set( 'post__in', $ids ); } } );
add_action( 'elementor_pro/posts/query/predavac', function ( $query ) { $postid = get_the_ID(); $ids = get_post_meta($postid, 'predavac', true); if ( $ids ) { $query->set( 'post__in', $ids ); } } );
add_action( 'elementor_pro/posts/query/organizator', function ( $query ) { $postid = get_the_ID(); $ids = get_post_meta($postid, 'organizator', true); if ( $ids ) { $query->set( 'post__in', $ids ); } } );
add_action( 'elementor_pro/posts/query/kursevi_asocijacija', function ( $query ) { $postid = get_the_ID(); $ids = get_post_meta($postid, 'kursevi_asocijacija', true); if ( $ids ) { $query->set( 'post__in', $ids ); } } );
add_action( 'elementor_pro/posts/query/blog_post', function ( $query ) { $postid = get_the_ID(); $ids = get_post_meta($postid, 'blog_post', true); if ( $ids ) { $query->set( 'post__in', $ids ); } } );
