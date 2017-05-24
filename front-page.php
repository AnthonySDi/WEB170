<?php
get_header();
?>
<!--This is where Front-page.php middle starts-->
    <div id="wrapper">
    <?PHP if(is_404()) {echo 'That page could not be located.   ';} ?>
    <div id="content">
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
                <?php rewind_posts();?> <!--Ends the previous PHP Loop-->
                <?PHP  query_posts('showposts=5');?> <!--instructs the next loop-->
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <li><?php the_title(); ?></li>
                <?PHP endwhile; endif; ?>
            </ul>
        </section>

    </div>
                 
        <aside>
            <h2> <?PHP echo get_the_title($post->post_parent); ?></h2>

            <ul class="sub-navigation-items">
                <?php 
                    if($post->post_parent) {
                    // if the page has parent, list the siblings.
                        wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => __(''),)); 
                    } else {
                        wp_list_pages(array('child_of' => $post->ID,'title_li' => __(''),));
                    }
                ?>
            </ul>
            <h3 class="head">
                Resources
            </h3>
            <ul>
                <li>
                    <a href="http://webdesignbyolga.com/central-web110-doc.php">
                        Doc type
                    </a>
                </li>
                <li>
                    <a href="http://meyerweb.com/eric/tools/css/reset/">
                        Meyer's Reset CSS
                    </a>
                </li>
                <li>
                    <a href="http://type-scale.com/">
                        Typography Scaling
                    </a>
                </li>
                <li>
                    <a href="http://www.simpleimageresizer.com/">
                        Image Resizer
                    </a>
                </li>
                <li>
                    <a href="https://color.adobe.com/create/color-wheel/">
                        Adobe Color
                    </a>
                </li>
                <li>
                    <a href="http://paletton.com/">
                        Paletton
                    </a>
                </li>
                <li>    
                    <a href="https://www.programmableweb.com/">
                        APIs
                    </a>
                </li>
            </ul>
            <h3 class="head">
                Helpful Podcasts
            </h3>
            <ul>
                <li>
                    <a href="https://spec.fm/podcasts/developer-tea">
                        Developer Tea
                    </a>
                </li>
                <li>
                    <a href="https://thewebplatform.libsyn.com/">
                        The Web Platform Podcast
                    </a>
                </li>
                <li>
                    <a href="http://shoptalkshow.com/">
                        Shop Talk
                    </a>
                </li>
            </ul>

        </aside>
    </div>
    <small>
        front-page.php
    </small>
<!--This is where Front-page.php middle +++ ENDS ++++ -->
<?php
get_footer();
?>