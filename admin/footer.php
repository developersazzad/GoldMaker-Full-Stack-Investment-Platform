<!-- FOOTER -->
<footer class="footer">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-md-12 col-sm-12 text-center">
                Copyright © <span id="year"></span> <a href="javascript:void(0)">GoldMaker</a>. Designed with <span
                    class="fa fa-heart text-danger"></span> by <a href="javascript:void(0)"> Smart444 </a> All rights reserved.
            </div>
        </div>
    </div>
</footer>
<!-- FOOTER END -->
</div>
<!-- BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
<!-- JQUERY JS -->
<script src="assets/js/jquery.min.js"></script>
<!-- BOOTSTRAP JS -->
<script src="assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- SPARKLINE JS-->
<script src="assets/js/jquery.sparkline.min.js"></script>
<!-- Sticky js -->
<script src="assets/js/sticky.js"></script>
<!-- CHART-CIRCLE JS-->
<script src="assets/js/circle-progress.min.js"></script>
<!-- PIETY CHART JS-->
<script src="assets/plugins/peitychart/jquery.peity.min.js"></script>
<script src="assets/plugins/peitychart/peitychart.init.js"></script>
<!-- SIDEBAR JS -->
<script src="assets/plugins/sidebar/sidebar.js"></script>
<!-- Perfect SCROLLBAR JS-->
<script src="assets/plugins/p-scroll/perfect-scrollbar.js"></script>
<script src="assets/plugins/p-scroll/pscroll.js"></script>
<script src="assets/plugins/p-scroll/pscroll-1.js"></script>
<!-- INTERNAL CHARTJS CHART JS-->
<script src="assets/plugins/chart/Chart.bundle.js"></script>
<script src="assets/plugins/chart/rounded-barchart.js"></script>
<script src="assets/plugins/chart/utils.js"></script>
<!-- INPUT MASK JS-->
<script src="assets/plugins/input-mask/jquery.mask.min.js"></script>
<!-- TypeHead js -->
<script src="assets/plugins/bootstrap5-typehead/autocomplete.js"></script>
<script src="assets/js/typehead.js"></script>
<!-- INTERNAL SELECT2 JS -->
<script src="assets/plugins/select2/select2.full.min.js"></script>
<!-- DATA TABLE JS-->
<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
<script src="assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
<script src="assets/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
<script src="assets/plugins/datatable/js/jszip.min.js"></script>
<script src="assets/plugins/datatable/pdfmake/pdfmake.min.js"></script>
<script src="assets/plugins/datatable/pdfmake/vfs_fonts.js"></script>
<script src="assets/plugins/datatable/js/buttons.html5.min.js"></script>
<script src="assets/plugins/datatable/js/buttons.print.min.js"></script>
<script src="assets/plugins/datatable/js/buttons.colVis.min.js"></script>
<script src="assets/plugins/datatable/dataTables.responsive.min.js"></script>
<script src="assets/plugins/datatable/responsive.bootstrap5.min.js"></script>
<script src="assets/js/table-data.js"></script>
<!-- INTERNAL Data tables js-->
<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
<script src="assets/plugins/datatable/dataTables.responsive.min.js"></script>
<!-- INTERNAL APEXCHART JS -->
<script src="assets/js/apexcharts.js"></script>
<script src="assets/plugins/apexchart/irregular-data-series.js"></script>
<!-- INTERNAL Flot JS -->
<script src="assets/plugins/flot/jquery.flot.js"></script>
<script src="assets/plugins/flot/jquery.flot.fillbetween.js"></script>
<script src="assets/plugins/flot/chart.flot.sampledata.js"></script>
<script src="assets/plugins/flot/dashboard.sampledata.js"></script>
<!-- INTERNAL Vector js -->
<script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SIDE-MENU JS-->
<script src="assets/plugins/sidemenu/sidemenu.js"></script>
<!-- TypeHead js -->
<script src="assets/plugins/bootstrap5-typehead/autocomplete.js"></script>
<script src="assets/js/typehead.js"></script>
<!-- INTERNAL INDEX JS -->
<!-- New -->
<!-- SELECT2 JS -->
<script src="assets/plugins/select2/select2.full.min.js"></script>
<script src="assets/js/select2.js"></script>

<script src="assets/js/index1.js"></script>
<!-- Color Theme js -->
<script src="assets/js/themeColors.js"></script>
<!-- INTERNAL Notifications js -->
<script src="assets/plugins/notify/js/rainbow.js"></script>
<!-- <script src="admin/assets/plugins/notify/js/sample.js"></script> -->
<script src="assets/plugins/notify/js/jquery.growl.js"></script>
<script src="assets/plugins/notify/js/notifIt.js"></script>
<!-- CUSTOM JS -->
<script src="assets/js/custom.js"></script>
<script src="assets/js/main_js.js"></script>
<script>
function icon_posh(s){
  $("#icon_saveon_this").val(s);
}
function banner_posh(s){
  $("#banner_saveon_this").val(s);
}
function banner_posh_2(s){
  $("#admin_banner_val").val(s);
}


// New Multi posh===

function icon_posh_multi(s,i){
  $("#icon_saveon_this_"+i).val(s);

}
function banner_posh_multi(s,i){
  $("#banner_saveon_this_"+i).val(s);

}
// trams and condition pages
function edit_trams(){
  $(".form-control").prop('disabled', false);
  $(".form-control").addClass("bold_big");
}
</script>
<?php
// danger=Admin Account inactive
if(isset($_REQUEST["notification"])){
  if($_REQUEST["notification"]=="danger"){
    $msg = $_REQUEST['msg'];
    $title = $_REQUEST['title'];
   ?>
  <script>
   $.growl.error1({
    title: "<?php echo $msg ?>",
    message: "<?php echo $title ?>"
   });
  </script>
   <?php
  }
}
// error
if(isset($_REQUEST["notification"])){
  if($_REQUEST["notification"]=="success"){
    $msg = $_REQUEST['msg'];
    $title = $_REQUEST['title'];
   ?>
 <script>
  $.growl.notice({
   title: "<?php echo $msg ?>",
   message: "<?php echo $title ?>"
  });
 </script>
 <?php
 }
}
?>
<!-- other -->
<script>
// $(".submitBtn_docs").click(function(){
//        $("#docsForm").submit(); // Submit the form
//    });
// maintance==
function set_maintaince_toggle(){
  var mt_mode = $("#maintaince_mode").is(":checked");
  if(mt_mode==true){
    $("#maintance_value").val("Yes");
  }else{
    $("#maintance_value").val("No");
  }
}
// smtp==
function set_smtp_toggle(){
  var mt_mode = $("#smtp_set_value").is(":checked");
  if(mt_mode==true){
    $("#smtp_value").val("Yes");
  }else{
    $("#smtp_value").val("No");
  }
}
// use payment
 function set_usePayment_toggle(id){
   var mt_mode = $("#usePayment_switch_"+id).is(":checked");
   if(mt_mode==true){
     $("#usePayment_"+id).val("active");
   }else{
     $("#usePayment_"+id).val("inactive");
   }
 }
 // use withdrow
  function set_usewithdrow_toggle(id){
    var mt_mode = $("#usewithdrow_switch_"+id).is(":checked");
    if(mt_mode==true){
      $("#usewithdrow_"+id).val("active");
    }else{
      $("#usewithdrow_"+id).val("inactive");
    }
  }
  //========================================
  function set_usewithdrow_toggle2(id){
    var mt_mode = $("#usewithdrow_switch2_"+id).is(":checked");
    if(mt_mode==true){
      $("#usewithdrow2_"+id).val("active");
    }else{
      $("#usewithdrow2_"+id).val("inactive");
    }
  }
  // pakages data===
  function add_new_payment_bank_list(){
    $html = "<div class='form-group'><input placeholder='New Bank Name' name='new_bank01' value='' type='text' class='form-control'></div>";
    $("#new_bank_889").html($html);
    $("#ad_new_bank66612").addClass('d-none');
  }

</script>
</body>
</html>
