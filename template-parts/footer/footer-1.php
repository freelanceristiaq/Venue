<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="about-veno">             
                    <?php if ( is_active_sidebar( 'footer-widget-1' ) ) : ?>
                        <?php dynamic_sidebar( 'footer-widget-1' ); ?>
                    <?php endif; ?>
<!-- 
                    <ul class="social-icons">
                        <?php venue_footer_social(); ?>
                    </ul> -->
                </div>
            </div>

            <div class="col-md-4">
                <?php if ( is_active_sidebar( 'footer-widget-2' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-widget-2' ); ?>
                <?php endif; ?>
            </div>

            <div class="col-md-3">
                <?php if ( is_active_sidebar( 'footer-widget-3' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-widget-3' ); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>

<div class="sub-footer">
    <p>&copy; 2018 Company Name - Design: 
        <a rel="nofollow" href="http://www.templatemo.com">Template Mo</a>
    </p>
</div>
