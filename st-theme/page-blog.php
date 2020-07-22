<?php /* Template Name: Blog */ ?>
<?php get_header();?>

<section>
    <?php
    $args = array( 'numberposts' => 10, 'order'=> 'ASC', 'orderby' => 'title' );
    $postslist = get_posts( $args );
    foreach ($postslist as $post) :  setup_postdata($post); ?> 
        <div>
            <?php the_date(); ?>
            <br />
            <?php the_title(); ?>   
            <?php the_excerpt(); ?>
        </div>
    <?php endforeach; ?>
</section>

<?php get_footer();?>