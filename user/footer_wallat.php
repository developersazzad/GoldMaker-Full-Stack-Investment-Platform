<!-- Footer ends-->


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

<!-- page level custom script -->
<script src="assets/js/app.js"></script>
<div class="col-12">
   <link rel="stylesheet" href="assets/css/notification.css">
  <?php include("./depandency/comon/notification.php") ?>
</div>
<script>
var toastElList = document.getElementById('toastinstall');
var toastElinit = new bootstrap.Toast(toastElList, {
  autohide: true,
  delay: 6000,
});
toastElinit.show();

  function submit_toggle(){
    $("#add_money_btn8").removeClass("disabled");
  }
  function show_withdrow909(id,payid){
      $("#set_value_number").val("InvestorNumber56_"+id);
      $("#add_withdrow_btn8").removeClass("disabled");
      if(payid=="Binance"){
        $("#binnance_w_addr98712").show(600);
        $("#wallat_network009").show(900);
        $("#wid_account_number").hide(900);
        $("#account_no12").html(' Binance Wallat Address');
        $("#routing_name12").html(' Binance Network');
        $("#method_name_un6767").val('Binance');
        $("#bank_dropdown").hide(900);
      }else if(payid=="Bank"){
        $("#binnance_w_addr98712").show(600);
        $("#wallat_network009").show(900);
        $("#wid_account_number").show(900);
        $("#bank_dropdown").show(900);
        $("#account_no12").html(' Your Bank Branch Name');
        $("#routing_name12").html(' Your Bank Routing Number');
        $("#method_name_un6767").val('Bank');
      }else{
       $("#wid_account_number").show(200);
        $("#binnance_w_addr98712").hide(600);
        $("#wallat_network009").hide(900);
        $("#method_name_un6767").val('Other');
        $("#bank_dropdown").hide(900);
      }
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

    // data new Bank
    function set_data(account,branch,routing,info_img){
      $("#account_no90").html("Account No : "+account);
      $("#branch_name90").html("Branch Name : "+branch);
      $("#rout_90").html("Routing Number : "+routing);
      $("#img_sp_info_img90").attr("src","../assets/images/screenshoot_bank/"+info_img);
    }
</script>
<!-- // Posh Notification -->
<?php include("./depandency/index/investor_notificationJs.php") ?>
<!-- Timer Script End======================= -->
</body>
</html>
