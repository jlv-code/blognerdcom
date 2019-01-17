<?php
/**
 * Created by José Viéitez
 * Date: 21/12/18
 */

$args = array(
    'posts_per_page' => 1,
    'post__in' => get_option( 'sticky_posts' ),
    'ignore_sticky_posts' => 1,
    'post_status' => 'published'
);

$featured_post = new WP_Query( $args );

?>

<div class="row">
    <div class="container">
        <?php if ( $featured_post->have_posts() ) : while ( $featured_post->have_posts() ) : $featured_post->the_post(); $GLOBALS['featuredPostId'] = get_the_ID() ?>
        <article id="post-id-<?php the_ID() ?>" class="row featured-post">
            <div class="col-12 col-lg-7 mb-5 mb-lg-0">
                <a class="featured-post--image" href="<?php the_permalink() ?>"><?php the_post_thumbnail('large', [ 'class' => 'img-fluid' ]) ?></a>
            </div>
            <div class="col-12 col-lg-5">
                <a class="featured-post--title" href="<?php the_permalink() ?>"><h1 class="font-weight-bold"><?php the_title() ?></h1></a>
                <div class="featured-post--excerpt"><?php the_excerpt() ?></div>
                <div class="featured-post--author">
                    <div class="container-avatar"><?php echo get_avatar ( get_the_author_meta('user_email'), 64, null, get_the_author_meta('user_nicename'), array('class' => 'img-fluid rounded-circle') ) ?></div>
                    <div class="container-info">
                        <p class="author font-weight-bold"><?php the_author() ?></p>
                        <p class="date"><?php the_date() ?></p>
                    </div>
                </div>
            </div>
        </article>
        <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>
</div>
