<?php get_header();?>

    <!-- The most basic of loops. Go forth and EXPAND IT. -->
    <?php if (have_posts()) : while (have_posts()) : the_post();?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>

<?php get_footer();?>
