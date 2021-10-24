<div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <?php 
                        if(is_active_sidebar("footer_left")){
                            dynamic_sidebar("footer_left");
                        }
                    ?>
                </div>
                <div class="col-md-6">
                <?php 
                        if(is_active_sidebar("ooter_right")){
                            dynamic_sidebar("footer_right");
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php wp_footer()?>
</body>

</html>