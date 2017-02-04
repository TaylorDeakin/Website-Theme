<head>
    <meta charset="utf-8">
    <title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>

    <meta name="description" content="<?php echo site_description(); ?>">

    <link rel="stylesheet" href="<?php echo theme_url('assets/css/styles.css'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Muli|Neuton" rel="stylesheet">

    <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
    <link rel="shortcut icon" href="<?php echo theme_url('assets/img/favicon.png'); ?>">

    <script>var base = '<?php echo theme_url(); ?>';</script>

    <meta name="viewport" content="width=device-width">
    <meta name="generator" content="Anchor CMS">

    <meta property="og:title" content="<?php echo og_title(); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo "http://taylordeakin.me/" . e(current_url()); ?>">
    <meta property="og:site_name" content="<?php echo site_name(); ?>">
    <meta property="og:description" content="<?php echo og_description(); ?>">
    <meta property="og:image" content="<?php echo og_image(); ?>">

    <?php if (customised()): ?>
        <!-- Custom CSS -->
        <style><?php echo article_css(); ?></style>

        <!--  Custom Javascript -->
        <script><?php echo article_js(); ?></script>
    <?php endif; ?>
</head>
