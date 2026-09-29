<?php
if($main_tanince_mode=="Yes"){
  ?>
  <script type="text/javascript">
    window.location.href = "index?notification=warning&title=Maintaince Mode&msg=Website Now Maintaince Mode.please Try After Some time Later"
  </script>
  <?php
}
if($Status=="Suspend"){
 ?>
 <script type="text/javascript">
   window.location.href = "index?notification=warning&title=Account Suspend&msg=You Try illigal activity. Your Account Suspend.Contact US admin and Try To fixed on this."
 </script>
 <?php
}
 ?>
