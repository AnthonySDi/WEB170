<?php
get_header();
?>
<!--This is where Front-page.php middle starts-->
    <div id="wrapper">
        <?PHP if(is_404()) {echo 'That page could not be located.   ';} ?>
        <div id="content" class="main">
            <section class="widget-items">
                <h3>
                    About Me:
                </h3>
                <?php
                    if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <article id="article-<?php the_ID() ?>" class="">
                            <?php the_content(); ?>
                        </article>
                <?php endwhile; endif;?>
            </section> 
            <section class="widget-items">
                <h4>
                    Latest Postings
                </h4>
                <ul>
                    <?php rewind_posts();?> <!--stops previous Loop-->
                    <?PHP  query_posts('showposts=5');?> <!--bosses nextx loop-->
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                    <?PHP endwhile; endif; ?>
                </ul>
            </section>

        </div>
                 
    </div>
    <small>
        front-page.php
    </small>
<!--This is where Front-page.php middle +++ ENDS ++++ -->
<?php
get_footer();
?>