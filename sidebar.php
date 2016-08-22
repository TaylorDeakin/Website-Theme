<aside class="col-sm-4">
    <h3>Newsletter</h3>
    <small>Sign up for a weekly summary of my posts</small>
    <form action="" class="form-horizontal">
        <label for="search">Enter your email</label>
        <div class="input-group">
            <input name="email" type="text" class="form-control" placeholder="Enter your email...">
          <span class="input-group-btn">
            <button class="btn btn-default" type="submit">Go!</button>
          </span>
        </div><!-- /input-group -->


    </form>

    <h3>Search</h3>
    <form action="<?php echo search_url(); ?>" method="post" class="form-horizontal">
        <label for="search">Find a post</label>
        <div class="input-group">
            <input name="term" id="term" type="text" class="form-control" placeholder="Search for..." value="<?php echo search_term(); ?>">
            <input type="hidden" id="whatSearch" name="whatSearch" value="all" />
          <span class="input-group-btn">
            <button class="btn btn-default" type="submit">Search!</button>
          </span>
        </div><!-- /input-group -->
    </form>

    <h3>Latest Tweets</h3>
    <a class="twitter-timeline" data-lang="en" data-height="800" data-dnt="true" data-theme="light" href="https://twitter.com/TaylorDeakin">Tweets by TaylorDeakin</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

</aside>