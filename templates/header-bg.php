<?php
/**
 *  Template name: Haeder with background
 * 
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php get_template_part('template-parts/header-bg/hero-bg'); ?>
    <div <?php post_class(); ?>>
        <?php while (have_posts()) {
            the_post(); ?>
            <div class="post">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="post-title text-center"> <?php the_title(); ?></h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        <?php if (has_post_thumbnail()) {
                                            the_post_thumbnail('full', [
                                                'class' => 'img-fluid',
                                            ]);
                                        } ?>
                                    </p>
                                    <p class="content">
                                        <?php the_content() ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        } ?>

    </div>
  <?php get_footer() ?>