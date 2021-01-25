<?php

add_filter( 'elementor_pro/utils/get_public_post_types', function( $post_types ) {
	$post_types['sfwd-courses'] = LearnDash_Custom_Label::get_label( 'courses' );
	$post_types['sfwd-lessons'] = LearnDash_Custom_Label::get_label( 'lessons' );
	$post_types['sfwd-topic'] = LearnDash_Custom_Label::get_label( 'topics' );
	$post_types['sfwd-quiz'] = LearnDash_Custom_Label::get_label( 'quizzes' );

	return $post_types;
} );
