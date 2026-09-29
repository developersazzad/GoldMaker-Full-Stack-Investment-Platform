    // add new restaurant validation//
    $(function() {
      // validate new order when submite rst admin
      $("form[name='Rst_info_update_form']").validate({
        // Specify validation rules
        rules: {
          // The key name on the left side is the name attribute
          // of an input field. Validation rules are defined
          // on the right side
          // data
          p_rst_email: "required",
          p_rst_addr: "required",
          p_rst_mobile: "required",
          p_rst_password: "required",
          p_rst_email: {
            required: true,
            // Specify that email should be validated
            // by the built-in "email" rule
            email: true
          },
        },
        // Specify validation error messages
        messages: {
          p_rst_email: "Please enter your Admin Email",
          p_rst_addr: "Please enter your Restourant Address",
          p_rst_mobile: "Please enter your Restourant number",
          p_rst_password: "Please enter your correct password",
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function(form) {
          form.submit();
        }
      });