<?php theme_include('header'); ?>
<div class="row">
    <div class="col-sm-8">

        <?php if (has_posts()): ?>

        <?php posts(); ?>
        <!-- featured/latest article-->
        <article class="article-featured item">
            <h2>
                <a href="<?php echo article_url(); ?>"
                   title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
            </h2>
            <small><em>Posted
                    <time
                        datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time>
                    by <?php echo article_author('real_name'); ?>.</em>
            </small>
            <?php if (article_custom_field('hero_image')) : ?>
                <img class="img-hero" src="<?php echo article_custom_field('hero_image') ?>"
                     alt="<?php echo article_title(); ?>"/>
            <?php endif; ?>
            <div class="content">
                <?php echo article_description(); ?>
            </div>


        </article>
        <!-- loop through the rest of the posts-->
        <?php $i = 0;
        while (posts()):
            if (($i % 2) == 0) echo '<div class="row">';
            ++$i;
            ?>
            <div class="col-sm-6">
                <article class="item">
                    <h3>
                        <a href="<?php echo article_url(); ?>"
                           title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
                    </h3>
                    <?php if (article_custom_field('hero_image')) : ?>
                        <img class="img-hero" src="<?php echo article_custom_field('hero_image') ?>"
                             alt="<?php echo article_title(); ?>"/>
                    <?php endif; ?>
                    <div class="content">
                        <?php echo article_description(); ?>
                    </div>
                </article>
            </div>
            <?php
            if ($i % 2 == 0) {
                echo '</div>';
            };
            ?>
        <?php endwhile; ?>
        <?php if($i % 2 != 0){
                echo '</div>';
            };?>
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

    </div>
    <?php theme_include('sidebar'); ?>
</div>

<?php theme_include('footer'); ?>
