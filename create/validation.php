<script src="../assets/js/validation.min.js"></script>
<script>
// add new registration validation//
$(function() {
 // validate new order when submite rst admin
 $("form[name='signUpInvestor']").validate({
   // Specify validation rules
   rules: {
     FastName: "required",
     LastName: "required",
     UserEmail: "required",
     new_password_one :"required",
     new_password_tow :"required",
     country :"required",
     mobile_number :"required",
   },
   messages: {
     FastName: "_____________Please enter your frist Name",
     LastName: "_____________Please enter your last Name",
     UserEmail: "_________Please enter your email address",
     new_password_one: "_____________Please enter your password",
     new_password_tow:"______________Retype your password",
     country:"____________Please enter your country",
     mobile_number:"_____________Please enter your Mobile Number",
     // p_rst_password: "Please enter your correct password",
   },
   submitHandler: function(form) {
     form.submit();
   }
 });

 // login validation=======
 $("form[name='user_loginForm']").validate({
   // Specify validation rules
   rules: {
     loginEmail8: "required",
     loginPassword8 :"required",
   },
   messages: {
     loginEmail8: "_______Please enter your email address",
     loginPassword8: "_________Please enter your password",
     // p_rst_password: "Please enter your correct password",
   },
   submitHandler: function(form) {
     form.submit();
   }
 });
 // forgate password
 $("form[name='ForGetPassword']").validate({
   // Specify validation rules
   rules: {
     ForgetEmail: "required",
   },
   messages: {
     ForgetEmail: "____________Please enter your Email",
     // p_rst_password: "Please enter your correct password",
   },
   submitHandler: function(form) {
     form.submit();
   }
 });
// verify form
$("form[name='verify_Form']").validate({
  // Specify validation rules
  rules: {
    otp_box: "required",
  },
  messages: {
    otp_box: "Please enter valid OTP number",
    // p_rst_password: "Please enter your correct password",
  },
  submitHandler: function(form) {
    form.submit();
  }
});
// new password
$("form[name='Rest_password_form']").validate({
  // Specify validation rules
  rules: {
    new_password_01:"required",
    new_password_02:"required",
  },
  messages: {
    password_one: "Please enter new password ",
    password_tow: "Please enter new password ",
    // p_rst_password: "Please enter your correct password",
  },
  submitHandler: function(form) {
    form.submit();
  }
});
})
</script>
