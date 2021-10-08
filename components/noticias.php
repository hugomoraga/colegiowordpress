
<?php 
// the query
$the_query = new WP_Query( array(
'posts_per_page' => 3,
)); 
?>


<div class="col-md-12 col-sm-12">
    <section id="news_list" class="p-4">
        <div class="shadow p-3" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/bg-c3.jpg); background-repeat: no-repeat; background-size: 200%;)">
            <div class="font-title fs-2 text-info">Noticias </div>
            <p></p>
            <ul class="news_list">
                <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <li class="pb-3">
                <div class="hvr-underline-from-left p-2 card border-0 shadow m-2 bg-primary">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <div class="img-fluid p-0">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if (has_post_thumbnail( $post->ID ) ): ?>
                                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                                    <img src="<?php echo $image[0]; ?>"
                                        style="height:160px; width: 240px; object-fit: cover;"
                                        alt="" class="img-left px-3" /></a>

                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="col-md-9">
                            <h4 class="text-capitalize text-truncate pl-3"> <?php the_title(); ?>
                            </h4>
                            <p class="pl-3"> <?php the_excerpt(); ?>
                            </p>
                        </div>
                    </div>
                </div>
                </li>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

                <?php else : ?>
                <p><?php __('No News'); ?></p>
                <?php endif; ?>
            </ul>
        </div>
    </section>

</div>

