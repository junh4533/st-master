
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<section id="post-wrapper">
    <div class="page-thumbnail">
        <?php
        if (has_post_thumbnail()) {
            the_post_thumbnail();
        }
        ?>
    </div>
    <div class="page-content">
        <h3 class="page-title"><?php the_title(); ?></h3>
        <div class="page-header">
            <div class="page-author">
                <?php echo get_avatar(get_the_author_meta(get_the_author_ID()), 32 ); ?>
                <?php the_author(); ?>
            </div>
            <div class="page-date">
                <i class="fa fa-clock-o"></i>
                <?php echo get_the_date(); ?>
            </div>
        </div>
        <hr class="w-100"/>

        <div class="page-content">
            <?php the_content(); ?>
        </div>

        <div class="post-tags">
            <i class="fa fa-tag fa-flip-horizontal"></i><?php echo get_the_tag_list("", ", "); ?>
        </div>
        <a class="post-back" href="<?php echo get_site_url(); ?>/blog">
            <i class="fa fa-arrow-left"></i>
            <span>View more posts</span>
        </a>
    </div>
</section>

<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>