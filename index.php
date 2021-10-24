<?php

/**
 * Get Hedear
 */

get_header(); ?>
<body <?php body_class(); ?>>

<?php
/**
     * Get Hero section
     * */
get_template_part('template-parts/hero'); ?>

    <div <?php post_class(); ?>>
        <?php while (have_posts()) {
            the_post(); ?>

            <div class="post">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="post-title"> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a> </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <p>
                                <strong><?php the_author(); ?></strong><br />
                                <?php the_date(); ?>
                            </p>
                            <?php echo get_the_tag_list(
                                '<ul class="list-unstyled"><li>',
                                '<li></li>',
                                '</li></ul>'
                            ); ?>
                        </div>
                        <div class="col-md-8">
                            <p>
                                <?php if (has_post_thumbnail()) { ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('medium', [
                                            'class' => 'img-fluid',
                                        ]); ?>
                                    </a>
                                <?php } ?>
                            </p>
                            <?php if (is_single()) {
                                the_content();
                            } else {
                                the_excerpt();
                            } ?>
                        </div>
                    </div>

                </div>
            </div>
        <?php
        } ?>
        <div class="post-pagination">
            <div class="text-center">
                <?php the_posts_pagination(); ?>
            </div>
        </div>
    </div>
    <?php echo time(); ?>
    <?php get_footer(); ?>
