<?php
get_header();
?>
<!--This is where page.php middle +++ STARTS +++-->
    <div id="wrapper">
        <?PHP if(is_404()) {echo 'That page could not be located.   ';} ?>


        <div id="content" class="main">
            <?php
                if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article id="article-<?php the_ID() ?>" class="">
                        <h2>
                            <?php the_title(); ?>
                        </h2> 
                        <?php the_content(); ?>
                    </article>
            <?php endwhile; endif;?>
        </div>

    <?php
        get_sidebar();
    ?>
    </div>
    <small>
        page.php
    </small>
<!--This is where page.php middle +++ ENDS +++-->
<?php
get_footer();
?>