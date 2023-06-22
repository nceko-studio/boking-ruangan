<div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
</div>


<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->


<script src="<?= base_url('assets'); ?>/public/vendor/libs/jquery/jquery.js"></script>
<script src="<?= base_url('assets'); ?>/public/vendor/js/bootstrap.js"></script>
<script>
    $(document).ready(function() {
        $(".detail-container").hide();
        $(".detail-btn").click(function() {
            $(".detail-container").toggle();
        });
    });
</script>

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="<?= base_url('assets'); ?>/public/vendor/libs/jquery/jquery.js"></script>
<script src="<?= base_url('assets'); ?>/public/vendor/libs/popper/popper.js"></script>
<script src="<?= base_url('assets'); ?>/public/vendor/js/bootstrap.js"></script>
<script src="<?= base_url('assets'); ?>/public/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="<?= base_url('assets'); ?>/public/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Main JS -->
<script src="<?= base_url('assets'); ?>/public/js/main.js"></script>

<!-- Page JS -->
<script src="<?= base_url('assets'); ?>/public/js/ui-modals.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>