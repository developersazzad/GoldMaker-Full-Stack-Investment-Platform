<!-- JQUERY JS -->
<script src="assets/js/jquery.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- INPUT MASK JS-->
<script src="assets/plugins/input-mask/jquery.mask.min.js"></script>

<!-- SIDE-MENU JS -->
<script src="assets/plugins/sidemenu/sidemenu.js"></script>

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

<!-- SIDEBAR JS -->
<script src="assets/plugins/sidebar/sidebar.js"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="assets/plugins/p-scroll/perfect-scrollbar.js"></script>
<script src="assets/plugins/p-scroll/pscroll.js"></script>
<script src="assets/plugins/p-scroll/pscroll-1.js"></script>
<!-- INTERNAL Notifications js -->
<script src="assets/plugins/notify/js/rainbow.js"></script>
<!-- <script src="admin/assets/plugins/notify/js/sample.js"></script> -->
<script src="assets/plugins/notify/js/jquery.growl.js"></script>
<script src="assets/plugins/notify/js/notifIt.js"></script>

<!-- Color Theme js -->
<script src="assets/js/themeColors.js"></script>

<!-- Sticky js -->
<script src="assets/js/sticky.js"></script>

<!-- CUSTOM JS -->
<script src="assets/js/custom.js"></script>
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
<script>
  function pakages_data(email){
    jQuery.ajax({
     url: '../ajax/get_pakages_data.php',
     type: 'post',
     // dataType: 'json',
     data: {
       email: email,
     },
     success: function(result) {
       $("#pakages_stotrage").html(result);
       if(result==""){
         $("#pakages_stotrage").html("<div class='card'><div class='card-body'><div class='h2 card-title'>No Data Found</div></div></div>");
       }
     }
   })
  }
  function send_message(email){
    $("#email_store_9").val(email);
    $("#email_box_msg").html(email);
  }
</script>
