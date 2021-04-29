<?php
/**
 * Template part for displaying posts excerpt
 */

$post_thumbnail_url = get_the_post_thumbnail_url() ? esc_url( get_the_post_thumbnail_url( null, 'thumbnail' ) ) : ( get_template_directory_uri() . '/assets/images/placeholder.png' );

?>

<div class="post mb-5">
    <div class="media">
        <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="<?php echo $post_thumbnail_url; ?>" alt="image">
        <div class="media-body">
            <h3 class="title mb-1"><?php the_title( sprintf( '<a href="%s">', esc_url( get_permalink() ) ), '</a>' ); ?></h3>
            <div class="meta mb-1">
                <span class="date">Published <?php the_date(); ?></span>
                <span class="comment"><a href="<?php echo sprintf( '%s#comments', esc_url( get_permalink() ) ) ?>"><?php comments_number(); ?></a></span></div>
            <div class="intro"><?php the_excerpt(); ?></div>
            <a class="more-link" href="<?php echo esc_url( get_permalink() ) ?>">Read more &rarr;</a>
        </div><!--//media-body-->
    </div><!--//media-->
</div>
