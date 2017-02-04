<!doctype html>
<html lang="en">
<?php include_once("head.php"); ?>
<body class="<?php echo body_class(); ?>">
<?php include_once("analytics.php") ?>
<header class="site-header">
    <nav class="navbar container">
        <a href="/" class="navbar-brand">Taylor Deakin</a>
        <ul class="navbar-nav">
            <?php if (has_menu_items()):
                while (menu_items()): ?>
                    <li <?php echo(menu_active() ? 'class="nav-item active"' : 'class="nav-item"'); ?>>
                        <a class="nav-link" href="<?php echo menu_url(); ?>"
                           title="<?php echo menu_title(); ?>">
                            <?php echo menu_name(); ?></a>
                    </li>
                <?php endwhile;
            endif; ?>
    </nav>
</header>

