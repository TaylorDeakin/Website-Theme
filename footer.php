</div>
<footer>
    <div class="container">
        <div class="footer-top row">
            <div class="col-sm-12">
                <nav>
                    <ul role="navigation" class="list-unstyled">
                        <?php if (twitter_account()): ?>
                            <li><a href="<?php echo twitter_url(); ?>">@<?php echo twitter_account(); ?></a></li>
                        <?php endif; ?>
                        <li><a href="<?php echo rss_url(); ?>">RSS</a></li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="footer-bottom ">
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> <?php echo site_name(); ?>. All rights reserved.</p>
        </div>
    </div>

</footer>

<script src="<?php echo theme_url('js/prism.js'); ?>"></script>
</body>
</html>
