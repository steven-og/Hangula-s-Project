<?php
get_header(); ?>

<div class="single-service container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h1 class="service-title"><?php the_title(); ?></h1>

        <?php if ( has_post_thumbnail() ) : ?>
            <div class="service-image">
                <?php the_post_thumbnail('large'); ?>
            </div>
        <?php endif; ?>

        <div class="service-content">
            <?php the_content(); ?>
        </div>

        <?php
        // Optional: Display ACF fields if you added them
        if( function_exists('get_field') ) : ?>
            <?php if( get_field('service_price') ): ?>
                <p><strong>Price:</strong> <?php the_field('service_price'); ?></p>
            <?php endif; ?>
            <?php if( get_field('service_duration') ): ?>
                <p><strong>Duration:</strong> <?php the_field('service_duration'); ?></p>
            <?php endif; ?>
        <?php endif; ?>

    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
