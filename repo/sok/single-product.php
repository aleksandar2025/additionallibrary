<?php get_header(); ?>

<div class="page-title">
    <h1 class="main-title"><?php the_title(); ?></h1>
</div>

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
<section id="content" class="part">
    <div class="container">
        <div id="post-holder" class="post">
            <div class="row">
                <div class="col-md-12">          
                    <article class="post">                       
                        <div class="post-img"><?php the_post_thumbnail( 'large', array('class' => ' featured-image img-responsive','alt' => ''.get_the_title().'', 'title' => ''.get_the_title().'' )); ?></div>             
                        <div class="text"> <?php the_content(); ?> </div> 
                    </article>         
                </div>
            </div>
        </div>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

<?php 
get_post_type();
if ( 'post' == get_post_type() ){ ?>
        <div class="latest news-row">
            <h2>Posljednje iz kategorije 
                <span>  
                    <?php 
                    $id = get_the_ID();
                    $cats = get_the_category($id);

                    $c = 0; $n = 0;
                    $c = count($cats);
                    foreach ( $cats as $cat ):
                        $n++; ?>
                        <a href="<?php echo get_category_link($cat->cat_ID); ?>">
                            <?php echo $cat->name; echo ( $n > 0 && $n < $c ? ', ' : ''); ?>
                        </a>
                    <?php endforeach; 

                    ?>
                    </span></h2>
            <div class="row">
                    <?php 
                    $args = array(
                        'posts_per_page' => -1, 
                        'no_found_rows'  => true,
                        'exclude' => ''
                    );

                    $cats = wp_get_post_terms( get_the_ID(), 'category' ); 
                    $cats_ids = array();  
                    foreach( $cats as $wpex_related_cat ) {
                        $cats_ids[] = $wpex_related_cat->term_id; 
                    }
                    if ( ! empty( $cats_ids ) ) {
                        $args['category__in'] = $cats_ids;
                    }

                    $wpex_query = new wp_query( $args );
                    foreach( $wpex_query->posts as $post ) : setup_postdata( $post ); ?>
                    <?php get_template_part( 'inc/grid'); ?>
                <?php endforeach; wp_reset_postdata(); ?>
            </div>
        </div>

        <?php } ?>


    </div>
</section>
<?php endwhile; endif ?>

<?php get_template_part( 'inc/cta'); ?>


<?php get_footer(); ?>

