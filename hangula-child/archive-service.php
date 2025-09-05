<?php
get_header(); ?>

<div class="services-archive container">
    <h1 class="page-title">Our Services</h1>
    <p class="page-subtitle">Explore the solutions we provide to help you grow and succeed.</p>

    <div class="services-grid">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="service-card">
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="service-image">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium'); ?>
                        </a>
                    </div>
                <?php endif; ?>

                <h2 class="service-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p class="service-excerpt"><?php echo wp_trim_words( get_the_content(), 20 ); ?></p>
                <a class="service-button" href="<?php the_permalink(); ?>">Learn More</a>
            </div>
        <?php endwhile; else: ?>
            <p>No services found.</p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
