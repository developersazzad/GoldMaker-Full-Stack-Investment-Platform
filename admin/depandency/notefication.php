if(isset($_REQUEST["notify"])){
  $data = $_REQUEST['notify'];
  if($data == "p_u_f"){
   ?>
  <script>
  $.growl.error1({
    title: "Your Email or password error",
    message: "Your email or password Wrong, try again!"
  });
  </script>
   <?php
  }
}
