<aside class="col-sm-4">
    <h3>Search</h3>
    <form action="<?php echo search_url(); ?>" method="post" class="form-horizontal">
        <label for="search">Find a post</label>
        <div class="input-group">
            <input type="hidden" id="whatSearch" name="whatSearch" value="all"/>
            <input name="term" id="term" type="text" class="form-control" placeholder="Search for..."
                   value="<?php echo search_term(); ?>">
          <span class="input-group-btn">
            <button class="btn btn-default" type="submit">Search!</button>
          </span>
        </div><!-- /input-group -->
    </form>

    <h3>Categories</h3>
    <ul>
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
    <h3>Links</h3>
    <small>You can find me at the following places:</small>
    <ul>
        <li><a href="https://github.com/TaylorDeakin">GitHub</a></li>
        <li><a href="https://linkedin.com/TaylorDeakin">LinkedIn</a></li>
        <li><a href="https://twitter.com/TaylorDeakin">Twitter</a></li>
    </ul>

    <h3>Latest Tweets</h3>
    <a class="twitter-timeline" data-lang="en" data-height="800" data-dnt="true" data-theme="light"
       href="https://twitter.com/TaylorDeakin">Tweets by TaylorDeakin</a>
    <script src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

</aside>