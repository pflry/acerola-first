<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <meta name="theme-color" content="#f1c40f">
    <meta name="msapplication-square310x310logo" content="<?php echo get_build_img_path('icon_largetile.png') ?>">
    <meta name="google-site-verification" content="">

    <title>
        <?php bloginfo('name'); ?> // <?php is_front_page() ? bloginfo('description') : wp_title(''); ?>
    </title>

    <link rel="icon" sizes="192x192" href="<?php echo get_build_img_path('icon.png') ?>">
    <link rel="apple-touch-icon" href="<?php echo get_build_img_path('ios-icon.png') ?>">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Lato:300,400,700,900" rel="stylesheet">
    <?php get_template_part( 'header-styles' ); ?>

    <?php wp_head(); ?>
    
</head>