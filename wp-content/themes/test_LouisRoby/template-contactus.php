<?php
/**
 * Template Name: Contact Us
 */
?>

<?php get_header(); ?>

<div class="title_container">

    <h1><?php the_title(); ?></h1>

    <div class="row">

        <div class="col-lg-6">
            This si where the contact form goes
        </div>

        <div class="col-lg-6">
            <?php get_template_part('includes/section', 'content'); ?>
        </div>

    </div>
    
</div>

<?php get_footer(); ?>