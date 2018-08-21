            <footer class="site-footer">
                <?php 
                    $name_content_1 = get_theme_mod('name_content_1', 'My Blog');
                    $name_content_2 = get_theme_mod('name_content_2', 'My Blog');
                    $name_content_3 = get_theme_mod('name_content_3', 'My Blog');

                    $content_1 = array(
                        'content_1' => get_theme_mod('content_1_1'),
                        'content_2' => get_theme_mod('content_1_2'),
                        'content_3' => get_theme_mod('content_1_3'),
                    );
                    $content_2 = array(
                        'content_1' => get_theme_mod('content_2_1'),
                        'content_2' => get_theme_mod('content_2_2'),
                        'content_3' => get_theme_mod('content_2_3'),
                    );
                    $content_3 = array(
                        'content_1' => get_theme_mod('content_3_1'),
                        'content_2' => get_theme_mod('content_3_2'),
                        'content_3' => get_theme_mod('content_3_3'),
                    );
                ?>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3">
                        <div>
                            <div class="footer-title"><?php bloginfo( 'name' );?></div>
                            <div>
                                <?php 
                                    $args = array(
                                    'theme_location' => 'footer'
                                    );
                                ?>
                                <?php wp_nav_menu($args); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div>
                            <div class="footer-title">
                                <?php echo $name_content_1; ?>
                            </div>
                            <?php foreach($content_1 as $content) { ?>
                                <div>
                                    <?php echo $content; ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div>
                            <div class="footer-title">
                                <?php echo $name_content_2; ?>
                            </div>
                            <?php foreach($content_2 as $content) { ?>
                                <div>
                                    <?php echo $content; ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div>
                            <div class="footer-title">
                                <?php echo $name_content_3; ?>
                            </div>
                            <?php foreach($content_3 as $content) { ?>
                                <div>
                                    <?php echo $content; ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div> 
                </div>
            </footer>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>

