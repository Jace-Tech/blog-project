<script src="../../../../assets/js/sweetalert.js"></script>
<?php 

if(isset($_SESSION['ADMIN_ALERT'])) {
    $alert = json_decode($_SESSION['ADMIN_ALERT'], true);
    
    ?>
        <script>
            swal("<?= $alert['message'] ?>", "", "<?= $alert['type'] ?>")
        </script>
    <?php

    unset($_SESSION['ADMIN_ALERT']);
}