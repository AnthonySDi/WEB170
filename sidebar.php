<!-- ++++++++ Begin Sidebar ++++++++ -->
        <aside>
            <h2> 
                <?PHP 
                    if(is_page()) {
                        echo get_the_title($post->post_parent); 
                    } else {
                    echo 'Blog';
                    }
                ?>
            </h2>

            <ul class="sub-navigation-items">
                <?php 
                    if(is_page()){
                        if($post->post_parent) {
                        // if the page has parent, list the siblings.
                            wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => __(''),)); 
                        } else {
                            wp_list_pages(array('child_of' => $post->ID,'title_li' => __(''),));
                        }
                    }else {
                        wp_list_categories(array('title' =>'',));
                        //because it makes sense to add categories to the blog side 
                        //NOTE: You could call different sidebar... Think about. 
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
<!-- ++++++++ End Sidebar ++++++++ -->