<?php

/**
 * This filter allows you to change the default Access Control List (ACL)
 * permission for an original file when offloaded to the bucket.
 *
 * @handles `as3cf_upload_acl`
 *
 * @param string $acl defaults to 'public-read'
 * @param array  $data wp_attachment_metadata
 * @param int    $post_id
 *
 * @return string
 */
function my_as3cf_upload_acl( $acl, $data, $post_id ) {
    return 'private';
}
add_filter( 'as3cf_upload_acl', 'my_as3cf_upload_acl', 10, 3 );

/**
 * This filter allows you to change the default Access Control List (ACL)
 * permission for intermediate image sizes when offloaded to the bucket.
 *
 * @handles `as3cf_upload_acl_sizes`
 *
 * @param string $acl      defaults to 'public-read'
 * @param string $size
 * @param int    $post_id
 * @param array  $metadata attachment metadata
 *
 * @return string
 */
function my_as3cf_upload_acl_sizes( $acl, $size, $post_id, $metadata ) {
    // thumbnail fix za nove uploade, auto-private za ove veličini
    if ( 'medium' === $size || 'thumbnail' === $size || 'large' === $size) {
        return 'private';
    }

    return $acl;
}
add_filter( 'as3cf_upload_acl_sizes', 'my_as3cf_upload_acl_sizes', 10, 4 );

