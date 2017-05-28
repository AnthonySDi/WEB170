<?php
get_header();
?>
<!--This is where single.php middle +++ STARTS +++-->
    <div id="wrapper">
        <?PHP if(is_404()) {echo 'That page could not be located.   ';} ?>


        <div id="content" class="single">
            <?php
                if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article id="article-<?php the_ID() ?>" class="">
                        <h2>
                                <?php the_title(); ?>
                        </h2>
                        <small>
                            Published by <?php the_author(); ?> on <?PHP the_time('F jS, Y'); ?> in <?PHP the_category(', '); ?> 
                        </small> 
                        <?php the_post_thumbnail('large'); ?>
                        <?php the_content(); ?>
                    </article>
            <?php endwhile; endif;?>
        </div>

    </div>
    <small>
       single.php
    </small>
<!--This is where single.php middle +++ ENDS +++-->
<?php
get_footer();
?>