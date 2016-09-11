<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>

    <meta name="description" content="<?php echo site_description(); ?>">

    <link rel="stylesheet" href="<?php echo theme_url('/css/styles.css'); ?>">

    <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
    <link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Gentium+Basic|Source+Sans+Pro:400,700" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script>var base = '<?php echo theme_url(); ?>';</script>

    <meta name="viewport" content="width=device-width">
    <meta name="generator" content="Anchor CMS">

    <meta property="og:title" content="<?php echo og_title(); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo "http://taylordeakin.me/" . e(current_url()); ?>">
    <meta property="og:site_name" content="<?php echo site_name(); ?>">
    <meta property="og:description" content="<?php echo og_description(); ?>">
    <meta property="og:image" content="<?php echo og_image();?>">

    <?php if (customised()): ?>
        <!-- Custom CSS -->
        <style><?php echo article_css(); ?></style>

        <!--  Custom Javascript -->
        <script><?php echo article_js(); ?></script>
    <?php endif; ?>
</head>
<body class="<?php echo body_class(); ?>">
<?php include_once("analytics.php") ?>
<div class="container">

    <header class="site-header">
        <h1>Taylor Deakin</h1>
        <nav class="navbar navbar-central">

            <ul class="nav navbar-nav">
                <?php if (has_menu_items()):
                    while (menu_items()): ?>
                        <li <?php echo(menu_active() ? 'class="active"' : ''); ?>>
                            <a href="<?php echo menu_url(); ?>"
                               title="<?php echo menu_title(); ?>">
                                <?php echo menu_name(); ?>
                            </a>
                        </li>
                    <?php endwhile;
                endif; ?>

            </ul>
        </nav>
    </header>

