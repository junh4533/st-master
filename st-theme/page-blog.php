<?php /* Template Name: Blog */ ?>
<?php get_header();?>

<section id="blog">

    <?php 
        // query for retrieving posts 
        $args = array(
            "orderby" => "post_date",
            "order" => "DESC"
        );

        $posts_array = get_posts($args);

        // loop through posts to retrieve the content 
        foreach ($posts_array as $post) {
            echo "<h1 class='red'>" . $post->post_title . "</h1><br>";
	        echo "<p>" . $post->post_content . "</p><br>";
        }

    ?>
</section>

<?php get_footer();?>