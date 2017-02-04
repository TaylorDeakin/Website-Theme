<?php theme_include('header'); ?>
<div class="container container-fill">
    <main>

        <?php if (has_posts()): ?>

            <?php posts(); ?>
            <!-- featured/latest article-->
            <article class="article article-featured">
                <h2 class="article-title">
                    <a href="<?php echo article_url(); ?>"
                       title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
                </h2>
                <?php if (article_custom_field('hero_image')) : ?>
                    <img class="article-img" src="<?php echo article_custom_field('hero_image') ?>"
                         alt="<?php echo article_title(); ?>"/>
                <?php endif; ?>
                <div class="content">
                    <?php echo article_description(); ?>
                    <br>
                    <small>
                        <em>Posted
                            <time
                                datetime="<?php echo date(DATE_W3C,
                                    article_time()); ?>"><?php echo relative_time(article_time()); ?></time>
                        </em>
                    </small>
                </div>


            </article>
            <!-- loop through the rest of the posts-->
            <?php while (posts()): ?>
                <article class="article">
                    <h3 class="article-title">
                        <a href="<?php echo article_url(); ?>"
                           title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
                    </h3>

                    <?php if (article_custom_field('hero_image')) : ?>
                        <img class="article-img" src="<?php echo article_custom_field('hero_image') ?>"
                             alt="<?php echo article_title(); ?>"/>
                    <?php endif; ?>
                    <div class="content">
                        <?php echo article_description(); ?>
                        <br>
                        <small>
                            <em>Posted
                                <time
                                    datetime="<?php echo date(DATE_W3C,
                                        article_time()); ?>"><?php echo relative_time(article_time()); ?></time>
                            </em>
                        </small>
                    </div>
                </article>

            <?php endwhile; ?>
            <?php if (has_pagination()): ?>
                <nav class="pagination">
                    <div class="wrap">
                        <div class="previous">
                            <?php echo posts_prev(); ?>
                        </div>
                        <div class="next">
                            <?php echo posts_next(); ?>
                        </div>
                    </div>
                </nav>
            <?php endif; ?>

        <?php else: ?>
            <div class="">
                <h1>No posts yet!</h1>
                <p>Looks like you have some writing to do!</p>
            </div>
        <?php endif; ?>

    </main>
</div>

<?php theme_include('footer'); ?>
