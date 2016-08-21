<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>

    <meta name="description" content="<?php echo site_description(); ?>">

    <link rel="stylesheet" href="<?php echo theme_url('/css/styles.css'); ?>">

    <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
    <link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:900|Open+Sans" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script>var base = '<?php echo theme_url(); ?>';</script>
    <script src="<?php echo asset_url('/js/zepto.js'); ?>"></script>
    <script src="<?php echo theme_url('/js/main.js'); ?>"></script>

    <meta name="viewport" content="width=device-width">
    <meta name="generator" content="Anchor CMS">

    <meta property="og:title" content="<?php echo site_name(); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo e(current_url()); ?>">
    <meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>">
    <meta property="og:site_name" content="<?php echo site_name(); ?>">
    <meta property="og:description" content="<?php echo site_description(); ?>">

    <?php if (customised()): ?>
        <!-- Custom CSS -->
        <style><?php echo article_css(); ?></style>

        <!--  Custom Javascript -->
        <script><?php echo article_js(); ?></script>
    <?php endif; ?>
</head>
<body class="<?php echo body_class(); ?>">
<div class="main-wrap">
    <header class="container" id="top">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <?php if (has_menu_items()):
                            while (menu_items()): ?>
                                <li <?php echo(menu_active() ? 'class="active"' : ''); ?>>
                                    <a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
                                        <?php echo menu_name(); ?>
                                    </a>
                                </li>
                            <?php endwhile;
                        endif; ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <?php while (categories()):
                                    if (category_count() > 0) { ?>
                                        <li>
                                            <a href="<?php echo category_url(); ?>"
                                               title="<?php echo category_description(); ?>">
                                                <?php echo category_title(); ?>

                                            </a>
                                        </li>
                                    <?php } endwhile; ?>
                            </ul>
                        </li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </header>
