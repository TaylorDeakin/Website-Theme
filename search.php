<?php theme_include('header'); ?>
    <div class="row">
        <section class="col-sm-8">
            <h2>You searched for &ldquo;<?php echo search_term(); ?>&rdquo;.</h2>
            <hr class="heavy">
            <?php if(has_search_results()): ?>

                <?php $i = 0; while(search_results()): $i++; ?>

                    <article class="">

                        <h2>
                            <a href="<?php echo search_item_url(); ?>" title="<?php echo search_item_title(); ?>"><?php echo search_item_title(); ?></a>
                        </h2>
                        <small><?php echo search_item_author(); ?> -
                            <?php echo search_item_date(); ?></small>
                        <?php if(search_item_description()): ;?>
                            <p><?php echo search_item_description(); ?></p>
                        <?php endif;?>


                    </article>
                    <hr>

                <?php endwhile; ?>
                </ul>

                <?php if(has_search_pagination()): ?>
                    <nav class="pagination">
                        <div class="">
                            <?php echo search_prev(); ?>
                            <?php echo search_next(); ?>
                        </div>
                    </nav>
                <?php endif; ?>

            <?php else: ?>
                <p class="">Unfortunately, there's no results for &ldquo;<?php echo search_term(); ?>&rdquo;. Did you spell everything correctly?</p>
            <?php endif; ?>
        </section>
        <?php theme_include('sidebar'); ?>
    </div>


<?php theme_include('footer'); ?>