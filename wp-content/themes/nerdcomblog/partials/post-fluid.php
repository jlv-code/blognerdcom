<article id="post-id-<?php the_ID() ?>" class="row no-gutters post-fluid mb-5">
    <div class="col-12 col-lg-5">
        <a class="post-fluid--image" href="<?php the_permalink() ?>"><?php the_post_thumbnail('large', [ 'class' => 'img-fluid' ]) ?></a>
    </div>
    <div class="col-12 col-lg-7">
        <a class="post-fluid--title" href="<?php the_permalink() ?>"><h2 class="text-gray-600 font-weight-bold mb-3"><?php the_title() ?></h2></a>
        <div class="post-fluid--excerpt mb-3"><?php the_excerpt() ?></div>
        <div class="post-fluid--author">
            <div class="container-avatar"><?php echo get_avatar ( get_the_author_meta('user_email'), 48, null, get_the_author_meta('user_nicename'), array('class' => 'img-fluid rounded-circle') ) ?></div>
            <div class="container-info">
                <p class="author font-weight-bold"><?php the_author() ?></p>
                <p class="date"><?php the_date() ?></p>
            </div>
        </div>
    </div>
</article>