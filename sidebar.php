<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */
?>
    <div class="side" role="complementary">
        <nav class="side-nav clearfix">
            <?php wp_page_menu( array( 'show_home' => 'Blog', 'sort_column' => 'menu_order' ) ); ?>
        </nav>

        <aside class="side-rss">
            <a href="<?php bloginfo( 'rss2_url' ); ?>">RSS</a>
        </aside>
        <?php wp_list_bookmarks('category_before=<aside>&category_after=</aside>'); ?> 
    </div>
