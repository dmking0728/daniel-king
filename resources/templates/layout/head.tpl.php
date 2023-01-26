<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;00&display=swap" rel="stylesheet">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class( 'my-class' ); ?>>
        <main>
            <nav class="navbar sticky-top navbar-expand-lg">
                
					<button class="navbar-toggler third-button" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<div class="animated-icon3"><span></span><span></span><span></span></div>
					</button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <?php 
                        wp_nav_menu( array(
                            'theme_location' => 'primary',
                            'container' => false,
                            'menu_class' => 'navbar-nav ms-auto mb-2 mb-lg-0'
                        ) );

                        ?>
                    </div>
                
            </nav>


