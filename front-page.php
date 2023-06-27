<?php
get_header();
?>
<div class="entry-content">
    <?php
    if (have_posts()) : while (have_posts()) : the_post();
            the_content();
        endwhile;
    endif;
    ?>
</div><!-- content -->

<?php get_template_part('template-parts/our-team', 'loop'); ?>

<?php get_footer();
