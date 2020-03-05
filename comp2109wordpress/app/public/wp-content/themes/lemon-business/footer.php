<?php wp_footer(); ?>

    <footer>
        <div class="container">
            
            <div class="row">

                <div class="col flex-column p-5">
                    <h5>Student Info:</h5>
                    <p>Name - Nicolas Bond</p>
                    <p>Student ID - 200365567</p>
                    <p>Copyright © 2020 Lemonz for Dayz</p>
                </div>

                <div class="col flex-column p-5">
                    <h5>Extras:</h5>
                    <?php wp_footer();?>

                    <?php wp_nav_menu (

                        array (
                                'theme_location' => 'footer-menu'
                            )
                    )
                ?>
                </div>

                <div class="col flex-column p-5">
                    <span class="footer-brand">&#127819;</span>
                </div>

            </div>

        </div>
    </footer>

</body>
</html>