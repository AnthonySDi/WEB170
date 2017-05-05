<?php
get_header();
?>



    <!--++++++++ BEGIN MIDDLE ++++++++-->

    <div id="wrapper">


        <main>
            <h2 class="head">
                Web Developer
            </h2>

            <p>
                This page serves to be a resource not just for myself but others. I will be expanding the resources as I progress in my knowledge of Web development.
            </p>

            <p>
                If you're not familiar with what a web developer is or what web development is. I can explain all of this for your. A web developer is a programmer that has a focus on internet applications, however, don't just take my word for it. YOu can find out more about web developers at the <a href="https://en.wikipedia.org/wiki/Web_developer">developer wikipedia page </a>. Web development is a general term for creating a website, which can cover a number of things. Check out the <a href="https://en.wikipedia.org/wiki/Web_development">web development page</a> on wikipedia for more information.
            </p>
            <p>
                If you have suggestions on additional resources or podcast suggestions, feel free to use the contact me page to send feedback.
            </p>

            <div id="content">
                <?php
                    if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <article id="article-<?php the_ID() ?>" class="">
                            <h2>
                                <a href="<?php the_permalink(); ?>"> 
                                    <?php the_title(); ?>
                                </a>
                            </h2> 
                            <?php the_content(); ?>
                        </article>
                <?php endwhile; endif;?>
            </div>
        </main>


        <aside>
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
        Index.php
    </small>
<!--++++++++ END MIDDLE ++++++++-->
<?php
get_footer();
?>