<!-- ENSURE THAT THE TEMPLATE NAME IS CORRECT  -->
<?php /* Template Name: Contact Us */ ?>
<?php get_header();?>

<section class="text-center" id="contact">
    <h2 class="d-block text-center">Contact Us</h2>
    <br><br>
    <h4> Want to get in touch? We'd love to hear from you and help promote your business!</h4> 
    <div class="container jumbotron mt-5">
        <?php echo do_shortcode('[hubspot type=form portal=8154984 id=611e3291-eeb0-45cb-9138-72f2e667dcd4]'); ?>
    </div>
</section>

<?php get_footer();?>