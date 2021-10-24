<?php

add_action('wp_head', 'dynamic_styles');
function dynamic_styles()
{
    if (current_theme_supports('custom-header')) { ?>

        <style>
            .heading a,
            .tagline {
                color: #<?php echo get_header_textcolor(); ?>
            }
        </style>

    <?php }
    if (!display_header_text()) { ?>
        <style>
            .tagline,
            .heading {
                <?php echo ' display: none !important; '; ?>
            }
        </style>

<?php }
}
