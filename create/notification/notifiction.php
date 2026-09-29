<?php
  if(isset($_GET["notification"])){
   $noti = $_GET["notification"];
   if($noti=="success"){
     $title = $_GET["title"];
     $msg = $_GET["msg"];
   ?>
   <div class="notification_success position-fixed top-0 start-50 translate-middle-x z-index-9">
       <div class="toast mt-3 main_notification" role="alert" aria-live="assertive" aria-atomic="true" id="toastinstall"
           data-bs-animation="true">
           <div class="toast-header notification_header_success">
             <img style="width:40px" src="../assets/images/logo/Goldmaker-squere-simple.png" class="rounded me-2" alt="...">
               <strong class="me-auto"><?php echo $title ?></strong>
               <small>Now</small>
               <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
           </div>
           <div class="toast-body ">
               <div class="row">
                   <div class="col">
                     <?php echo $msg ?>
                   </div>
               </div>
           </div>
       </div>
   </div>
  <?php
   }
 }
 if(isset($_GET["notification"])){
   $noti = $_GET["notification"];
   if($noti=="warning"){
     $title = $_GET["title"];
     $msg = $_GET["msg"];
    ?>
    <div class="notification_warning position-fixed top-0 start-50 translate-middle-x z-index-9">
        <div class="toast mt-3 main_notification" role="alert" aria-live="assertive" aria-atomic="true" id="toastinstall"
            data-bs-animation="true">
            <div class="toast-header notification_header_warning">
              <img style="width:40px" src="../assets/images/logo/Goldmaker-squere-simple.png" class="rounded me-2" alt="...">
                <strong class="me-auto"><?php echo $title ?></strong>
                <small>Now</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body ">
                <div class="row">
                    <div class="col">
                      <?php echo $msg ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
  }
}
 ?>
