<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <!-- Stylesheets 
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <?php wp_head(); ?>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Document Title 
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <title>Moon Blog</title>
</head>
<body>
    <!-- Primary Navigation
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <nav id="primary-menu" class="style-2">
        <div class="container clearfix">
            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                <!-- Main Menu 
                ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <?php
                if(has_nav_menu( 'primary' )){
                    wp_nav_menu([
                        'theme_location'    => 'primary',
                        'container'         => false,
                        'fallback_cb'       => false,
                        'depth'             => 4,
                        'walker'            => new MOON_Custom_Nav_Walker
                    ]);
                }
                ?>
        </div>
    </nav>

    <?php wp_footer(); ?>
</body>
</html>