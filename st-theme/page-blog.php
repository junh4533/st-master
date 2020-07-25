<?php /* Template Name: Blog */ ?>
<?php get_header();?>

<section id="blog">
    <h2 class="d-block text-center">Blog</h2>
    <br><br>
    <div class="container">
        <div class="row">
            <?php 
        // query for retrieving posts 
        $args = array(
            "orderby" => "post_date",
            "order" => "DESC"
        );

        $posts_array = get_posts($args);

        // loop through posts to retrieve the content 
        foreach ($posts_array as $post) {
    ?>
            <div class="col-6 col-md-3 col-xl-4 my-3">
                <div class="blog-preview-container">
                    <div class="card">
                        <div class="card-top" style="background: url('<?php echo get_the_post_thumbnail_url() ?>') center / cover no-repeat"></div>
                        <div class="card-body">
                            <h4 class="card-title"> <?php  echo $post->post_title; ?> </h4>
                            <p class="card-text my-3"><?php  echo $post->post_excerpt; ?></p>
                            <a href="<?php echo get_post_permalink();?>" target="_blank" class="float-right stretched-link">Read
                                more</a>
                        </div>
                    </div>
                </div>
            </div>
    <?php
        } //foreach ending tag
    ?>

        </div>
    </div>

</section>

<?php get_footer();?>