<article id="post-id-<?php the_ID() ?>" class="post-2-col col-12 col-md-6 mb-5">
    <div class="row">
        <div class="container-fluid">
            <a class="post-2-col--image" href="<?php the_permalink() ?>"><?php the_post_thumbnail('large', [ 'class' => 'img-fluid' ]) ?></a>
            <a class="post-2-col--title" href="<?php the_permalink() ?>"><h3 class="font-weight-bold text-justify"><?php the_title() ?></h3></a>
            <div class="post-2-col--excerpt text-justify"><?php the_excerpt() ?></div>
            <div class="post-2-col--author">
                <div class="container-avatar"><?php echo get_avatar ( get_the_author_meta('user_email'), 48, null, get_the_author_meta('user_nicename'), array('class' => 'img-fluid rounded-circle') ) ?></div>
                <div class="container-info">
                    <p class="author font-weight-bold"><?php the_author() ?></p>
                    <p class="date"><?php the_date() ?></p>
                </div>
            </div>
        </div>
    </div>
</article>
