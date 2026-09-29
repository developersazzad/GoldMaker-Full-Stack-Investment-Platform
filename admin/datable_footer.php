
        <!-- FOOTER -->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 text-center">
                        Copyright © <span id="year"></span> <a href="javascript:void(0)">Sash</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0)"> Spruko </a> All rights reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER CLOSED -->
    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

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
      function pakages_data(email,id,name){
        var prifile_val = $("#Profile_"+id).val();
        $("#investor_profile").attr('src',prifile_val);
        jQuery.ajax({
         url: '../ajax/get_pakages_data.php',
         type: 'post',
         // dataType: 'json',
         data: {
           email: email,
         },
         success: function(result) {
           $("#pakages_stotrage").html(result);
           $("#pakages_stotrage").html(result);
           $("#email_box90").html(email);
           $("#name_box90").html(name);
           if(result==""){
             // profile_value_business.sazzad.me@gmail.com
             $("#pakages_stotrage").html("<div class='card'><div class='card-body'><div class='h2 card-title'>No Data Found</div></div></div>");
           }
         }
       })
      }
      function send_message(email){
        $("#email_store_9").val(email);
        $("#email_box_msg").html(email);
      }
      // payment withdrow js=========
      function withdrow_stats(id,email){
        $("#withdrow_Btn_storage").val(id);
        $("#withdrow_email_90").val(email);
        $("#why_cancle_89").hide();
        $("#why_cancle_90").hide();
      }
      function cancle_w_show_textarea(){
       $("#why_cancle_89").toggle();
       $("#why_cancle_90").toggle();
      }
      // payment add js==============
      function Payment__req_stats(id,email,amount){
        $("#add_Btn_storage").val(id);
        $("#add_email_100").val(email);
        $("#amount_A_100").val(amount);
        $("#why_cancle_100").hide();
        $("#why_cancle_101").hide();
      }
      function cancle_A_show_textarea(){
      // one textaria and one button===
       $("#why_cancle_100").toggle();
       $("#why_cancle_101").toggle();
      }
    </script>

</body>

</html>
