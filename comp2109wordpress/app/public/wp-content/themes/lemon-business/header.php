<!DOCTYPE html>
<html>

<head>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
    <nav class="navbar navbar-expand-md navbar-light bg-faded fixed-top">
        <a class="navbar-brand" href="/">&#127819;</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php
        wp_nav_menu([
            'menu'            => 'top',
            'theme_location'  => 'top-menu',
            'container'       => 'div',
            'container_id'    => 'bs4navbar',
            'container_class' => 'collapse navbar-collapse',
            'menu_id'         => false,
            'menu_class'      => 'navbar-nav mr-auto',
            'depth'           => 2,
            'fallback_cb'     => 'bs4navwalker::fallback',
            'walker'          => new bs4navwalker()
        ]);
        ?>
    </nav>

    <div class="container p-5 header-content">
        <h2>Lemonz For Dayz.</h2>
        <p>Checkout all of the sweet and sour lemons we have to offer!</p>
    </div>
</header>