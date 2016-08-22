<footer class="">
    <div class="footer-top row">
       <div class="col-md-12">
           <small>&copy; <?php echo date('Y'); ?> <?php echo site_name(); ?>. All rights reserved.</small>

           <ul role="navigation">
               <li><a href="<?php echo rss_url(); ?>">RSS</a></li>
               <?php if (twitter_account()): ?>
                   <li><a href="<?php echo twitter_url(); ?>">@<?php echo twitter_account(); ?></a></li>
               <?php endif; ?>

               <li><a href="<?php echo base_url('admin'); ?>" title="Administer your site!">Admin area</a></li>

               <li><a href="<?php echo base_url(); ?>" title="Return to my website.">Home</a></li>
           </ul>
       </div>
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
