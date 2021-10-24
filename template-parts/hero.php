<div class="header">
        <div class="container">
            <div class="row">
                <?php 
                    if(current_theme_supports( "custom-logo")){ 
                ?>
                    <div class="col-md-12">
                        <div class="logo text-center">
                            <a class="text-center" href="<?php echo site_url() ?>"><?php the_custom_logo() ?></a>
                            
                        </div>
                    </div>

                <?php
                    
                    }
                
                ?>
                <div class="col-md-12">
                    <h3 class="tagline"><?php bloginfo("description") ?></h3>
                    <h1 class="align-self-center display-1 text-center heading"> <a href="<?php echo site_url() ?>"><?php bloginfo("name") ?></a> </h1>
                    <div class="menu">
                        <?php 
                            wp_nav_menu(array(
                               "theme_location" => "header",
                               "menu_class" => "text-center"
                            ));
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>