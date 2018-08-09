            <footer class="site-footer">
                <nav class="site-nav">
                    <?php 
                        $args = array(
                            'theme_location' => 'footer'
                        );
                    ?>
                    <?php wp_nav_menu($args); ?>
                </nav>

                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3">
                        <div>
                            <div class="footer-title"><?php bloginfo( 'name' );?></div>
                            <div>
                                Welcome
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div>
                            <div class="footer-title">Contact Us</div>
                            <div>
                                <ul>
                                    <li>
                                        +66 123 1234 12
                                    </li>
                                    <li>
                                        email@email.com
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="footer-title">Social</div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div>
                            <div class="footer-title">
                                Column 3
                            </div>
                            <div>
                                Content goes here
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div>
                            <div class="footer-title">
                                Column 4
                            </div>
                            <div>
                                Content goes here
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>

