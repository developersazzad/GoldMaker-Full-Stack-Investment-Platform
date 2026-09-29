<div class="col-12">
   <link rel="stylesheet" href="../user/assets/css/notification.css">
  <?php include("notification/notifiction.php") ?>
</div>
<!-- Required jquery and libraries -->
<script src="../user/assets/js/jquery-3.3.1.min.js"></script>
<script src="../user/assets/js/popper.min.js"></script>
<script src="../user/assets/vendor/bootstrap-5/js/bootstrap.bundle.min.js"></script>
<!-- cookie js -->
<script src="../user/assets/js/jquery.cookie.js"></script>
<!-- Customized jquery file  -->
<script src="../user/assets/js/main.js"></script>
<!-- <script src="../user/assets/js/color-scheme.js"></script> -->
<!-- PWA app service registration and works -->
<script src="../user/assets/js/pwa-services.js"></script>
<!-- swiper js script -->
<script src="../user/assets/vendor/swiperjs-6.6.2/swiper-bundle.min.js"></script>
<!-- page level custom script -->
<script src="../user/assets/js/app.js"></script>
<?php include("validation.php") ?>
<script>
var toastElList = document.getElementById('toastinstall');
var toastElinit = new bootstrap.Toast(toastElList, {
  // autohide: true,
  // delay: 3000,
});
toastElinit.show();
</script>
<!-- script validation  -->
<script>

</script>
</body>
</html>
