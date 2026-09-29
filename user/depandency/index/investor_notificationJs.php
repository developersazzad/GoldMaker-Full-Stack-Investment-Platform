<script>
 function INS_notification(){
   var profile = "<?php echo $ProfilePic ?>";
   var name = "<?php echo $FastName ?>";
   var email = "<?php echo $Email ?>";
   jQuery.ajax({
           url: '../ajax/investor_notification.php',
           type: 'post',
           // dataType: 'json',
           // also use : not =
           data: {
             email:email,
             profile:profile,
             name:name,
           },
           success: function(result) {
             // console.log(result);
             var data = jQuery.parseJSON(result);
              $("#not_box_8876").html(data.html);
              $("#count_indicatorN").html(data.NotiCount);
              show_posh_notification();
           }
         });
       }
      setInterval(INS_notification, 5000);
</script>
