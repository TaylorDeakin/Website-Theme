<footer class="site-footer">
    <div class="container footer-row">
        <nav class="footer-nav">
            <a href="mailto:mail@taylordeakin.me">
                <svg class="icon">
                    <use xlink:href="#icon-mail"
                </svg>
            </a><a href="https://github.com/TaylorDeakin">
                <svg class="icon">
                    <use xlink:href="#icon-github"
                </svg>
            </a><a href="https://twitter.com/TaylorDeakin">
                <svg class="icon">
                    <use xlink:href="#icon-twitter"
                </svg>
            </a>
            <!--TODO: get a linkedin set up
                <a href="">
                <svg class="icon">
                    <use xlink:href="#icon-linkedin"
                </svg>
            </a>-->
        </nav>
        <p>&copy; <?php echo date('Y'); ?> <?php echo site_name(); ?> | <a href="<?php echo rss_url(); ?>">RSS</a></p>
    </div>
</footer>
<script src="<?php echo theme_url('assets/js/app.js'); ?>"></script>
<script>
    objectFitImages();
</script>
<?php echo file_get_contents('themes/deakin/assets/icons.svg'); ?>
</body>
</html>
