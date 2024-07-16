<?php if (is_active_sidebar('footer-sidebar-1') or is_active_sidebar('footer-sidebar-2') or is_active_sidebar('footer-sidebar-3') or is_active_sidebar('footer-sidebar-4')) : ?>
    <!-- page footer  -->
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <?php dynamic_sidebar('footer-sidebar-1'); ?>
            </div>
            <div class="col-lg-3">
                <?php dynamic_sidebar('footer-sidebar-2'); ?>
            </div>
            <div class="col-lg-3">
                <?php dynamic_sidebar('footer-sidebar-3'); ?>
            </div>
            <div class="col-lg-3">
                <?php dynamic_sidebar('footer-sidebar-4'); ?>
            </div>
        </div>
    </div>
    <!-- end of page footer -->
<?php endif; ?>

<div class="bg-dark text-light text-center border-top wow fadeIn">
    <?php food_copyright_option(); ?>
</div>