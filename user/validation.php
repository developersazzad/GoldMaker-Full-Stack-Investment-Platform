<script src="../assets/js/validation.min.js"></script>
<script>
// add new registration validation//\

$(function() {
 

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
