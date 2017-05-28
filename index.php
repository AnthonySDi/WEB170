<?php
    get_header();
?>
<!--++++++++ BEGIN MIDDLE ++++++++-->
<!--This is where index.php middle +++ STARTS +++ -->
    <div id="wrapper">
    <?PHP if(is_404()) {echo 'That page could not be located.   ';} ?>
    <div id="content" class="main">
        <?php
            if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article id="article-<?php the_ID() ?>" class="">
                    <h2>
                        <a href="<?php the_permalink(); ?>"> 
                            <?php the_title(); ?>
                        </a>
                    </h2> 
                    <small>
                        Published <?PHP the_time('F jS, Y'); ?> in <?PHP the_category(', '); ?> by <?php the_author(); ?>
                    </small>
                    <a href="<?php the_permalink();?>">
                        <?php the_post_thumbnail('thumbnail'); ?>
                    </a>
                    <p>
                        <?php echo get_the_excerpt(); ?>
                    
                        <a href="<?php the_permalink(); ?>"> 
                            Full Post&nbsp;&raquo;
                        </a>
                    </p>
                </article>
        <?php endwhile; endif;?>
    </div>

    <?php
        get_sidebar();
    ?>


    </div>
    <small>
        Index.php
    </small>
<!--++++++++ END MIDDLE ++++++++-->
<!--This is where Front-page.php middle +++ ENDS +++-->
<?php
    get_footer();
?>