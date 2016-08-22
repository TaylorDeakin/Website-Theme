<footer>
    <div class="footer-top row">
        <div class="col-sm-12">
            <h3>Information</h3>
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
    <div class="footer-bottom ">
            <p>&copy; <?php echo date('Y'); ?> <?php echo site_name(); ?>. All rights reserved.</p>
    </div>
</footer>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="<?php echo theme_url('js/bootstrap.min.js'); ?>"></script>
</body>
</html>
