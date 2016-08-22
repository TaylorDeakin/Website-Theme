<?php theme_include('header'); ?>
<div class="row">

<section class="col-sm-8" id="article-<?php echo article_id(); ?>">

    <article class="article-content">
        <header>
            <h2 class="article-title"><?php echo article_title(); ?></h2>
            <?php if (article_custom_field('subtitle')) : ?>
                <p class="lead article-subtitle"><?php echo article_custom_field('subtitle') ?></p>
            <?php endif; ?>
            <p class="author"><?php echo article_author(); ?></p>
        </header>
        <?php if (article_custom_field('hero_image')) : ?>
            <img class="img-hero" src="<?php echo article_custom_field('hero_image') ?>"
                 alt="<?php echo article_title(); ?>"/>
        <?php endif; ?>
        <?php echo article_markdown(); ?>
    </article>
</section>
    <?php theme_include('sidebar'); ?>
</div>
<?php if (comments_open()): ?>
    <section class="comments">
        <?php if (has_comments()): ?>
            <ul class="commentlist">
                <?php $i = 0;
                while (comments()): $i++; ?>
                    <li class="comment" id="comment-<?php echo comment_id(); ?>">
                        <div class="wrap">
                            <h2><?php echo comment_name(); ?></h2>
                            <time><?php echo relative_time(comment_time()); ?></time>

                            <div class="content">
                                <?php echo htmlspecialchars(comment_text()); ?>
                            </div>

                            <span class="counter"><?php echo $i; ?></span>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>

        <form id="comment" class="commentform wrap" method="post" action="<?php echo comment_form_url(); ?>#comment">
            <?php echo comment_form_notifications(); ?>

            <p class="name">
                <label for="name">Your name:</label>
                <?php echo comment_form_input_name('placeholder="Your name"'); ?>
            </p>

            <p class="email">
                <label for="email">Your email address:</label>
                <?php echo comment_form_input_email('placeholder="Your email (won’t be published)"'); ?>
            </p>

            <p class="textarea">
                <label for="text">Your comment:</label>
                <?php echo comment_form_input_text('placeholder="Your comment"'); ?>
            </p>

            <p class="submit">
                <?php echo comment_form_button(); ?>
            </p>
        </form>

    </section>
<?php endif; ?>

<?php theme_include('footer'); ?>
