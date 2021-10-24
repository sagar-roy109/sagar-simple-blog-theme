<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php get_template_part('template-parts/hero'); ?>
    <div <?php post_class(); ?>>
        <?php while (have_posts()) {
            the_post(); ?>
            <div class="post">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="post-title"> <?php the_title(); ?></h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        <strong><?php the_author(); ?></strong><br />
                                        <?php the_date(); ?>
                                    </p>
                                    <p>
                                        <?php if (has_post_thumbnail()) {
                                            the_post_thumbnail('full', [
                                                'class' => 'img-fluid',
                                            ]);
                                        } ?>
                                    </p>
                                    <?php if (is_single()) {
                                        the_content();
                                    } else {
                                        the_excerpt();
                                    } ?>
                                </div>
                            </div>
                            <!-- post pagination  -->
                            <div class="post-pagination">
                                <div class="text-center d-flex d-space-between">
                                    <?php next_post_link(); ?>
                                    <?php previous_post_link(); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="side-bar">
                                <?php 
                                    if(is_active_sidebar("single_post_sidebar")){
                                        dynamic_sidebar("single_post_sidebar");
                                    }
                                    
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        } ?>

    </div>
  <?php get_footer() ?>