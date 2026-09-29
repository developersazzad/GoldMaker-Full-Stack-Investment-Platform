<div class="col-12">
   <link rel="stylesheet" href="assets/css/notification.css">
   <?php include("./depandency/comon/notification.php") ?>
</div>
<!-- Required jquery and libraries -->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/vendor/bootstrap-5/js/bootstrap.bundle.min.js"></script>
<!-- cookie js -->
<script src="assets/js/jquery.cookie.js"></script>
<!-- Customized jquery file  --> 
<script src="assets/js/main.js"></script>
<script src="assets/js/color-scheme.js"></script>
<!-- PWA app service registration and works -->
<script src="assets/js/pwa-services.js"></script>
<!-- Chart js script -->
<script src="assets/vendor/chart-js-3.3.1/chart.min.js"></script>
<!-- Progress circle js script -->
<script src="assets/vendor/progressbar-js/progressbar.min.js"></script>
<!-- swiper js script -->
<script src="assets/vendor/swiperjs-6.6.2/swiper-bundle.min.js"></script>
<!-- daterange picker script -->
<script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="assets/vendor/daterangepicker/daterangepicker.js"></script>
<!-- page level custom script -->
<script src="assets/js/app.js"></script>
<?php include("validation.php") ?>
  <script>
    /* request money notification remove after time*/
   function show_posh_notification(){
     $('#hideonprogressbar_sp').find('.progress-bar').css('width',  "0%");
      $('#hideonprogressbar_sp').fadeIn();
      $('.hideonprogressbar').each(function () {
          var thisEl = $(this);
          var hidelment = "." + thisEl.attr('data-target')
          var widthprogress = 1;
          setInterval(function () {
              widthprogress++;
              if (widthprogress > 0 && widthprogress < 100) {
                  thisEl.find('.progress-bar').css('width', widthprogress + "%");

              } else if (widthprogress === 100) {
                  $(hidelment).fadeOut();
              }
          }, 75)
      })
  }
</script>
<script>
var toastElList = document.getElementById('toastinstall');
var toastElinit = new bootstrap.Toast(toastElList, {
  autohide: true,
  delay: 6000,
});
toastElinit.show();
// function pakages roles show====
function show_rols_pakages(id){
    $("#rols_"+id).toggle();
}
</script>

<script>
// myplan js===
const myTimeout = setTimeout(www, 3000);
function www() {
  var todayAllpkg = $("#todayEarningData").val();
  $("#totalToday").html(todayAllpkg+" USD");
}
// notification Read==
function read_notification(data){
  $("#noti_"+data).hide(500);
  jQuery.ajax({
          url: '../ajax/read_notification.php',
          type: 'post',
          // dataType: 'json',
          // also use : not =
          data: {
            data:data,
          },
          success: function(result) {
              $("#notiM_"+data).hide(800);
          }
        });
}
// COPY INVESTOR Data==================
//get_data - get copy id
//posh_show -show Clipbord
function copy_data(get_data,posh_show){
  const elem = document.createElement('textarea');
  let str = document.getElementById(get_data).innerHTML;
  let res = str.replace(/xxxxxx/g, "\n");
  // alert(res);
  elem.value = res;
  document.body.appendChild(elem);
  elem.select();
  document.execCommand('copy');
  // alert(res);
  $("#"+posh_show).html("copy to clipboard");
  $("#"+posh_show).show(200);
  function hide_copy(){
    $("#"+posh_show).hide(1000);
  }
    setTimeout(hide_copy,3000);
  document.body.removeChild(elem);
}

// Posh Notification
function set_notification_value(value){
  var user_id = '<?php echo $IuserId ?>';
  jQuery.ajax({
          url: '../ajax/set-notification.php',
          type: 'post',
          // dataType: 'json',
          // also use : not =
          data: {
            value:value,
            user_id:user_id,
          },
          success: function(result) {

          }
        });
}
</script>
<?php include("./depandency/index/investor_notificationJs.php") ?>
<!-- Timer Script End======================= -->
</body>
</html>
