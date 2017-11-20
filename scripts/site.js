// Make it easy to test PHP.
// Set this variable to true, if you want to test PHP form validation without
// client-side jQuery validation too.
var TEST_PHP_FORM = false;

$(document).ready(function() {

  if (!TEST_PHP_FORM) {
    $("#formSubmit").on("submit",function(){
      formValid = true;
      FnameIsValid = $("#fname").prop("validity").valid;
      if (FnameIsValid) {
        $("#fnameError").hide();
      } else {
        $("#fnameError").show();
        formValid = false;
        // return false;
      }

      LnameIsValid = $("#lname").prop("validity").valid;
      if(LnameIsValid) {
        $("#lnameError").hide();
      } else{
        $("#lnameError").show();
        formValid = false;
        // return false;
      }

      EmailIsValid = $("#email").prop("validity").valid;
      if (EmailIsValid) {
        $("#emailError").hide();
      } else {
        $("#emailError").show();
        formValid = false;
        // return false;
      }

      SubjectIsValid = $("#subject").prop("validity").valid;
      if(SubjectIsValid){
        $("#subjectError").hide();
      } else{
        $("#subjectError").show();
        formValid = false;
        // return false;
      }

      MessageIsValid = $("#message").prop("validity").valid;
      if(MessageIsValid){
        $("#textError").hide();
      }else{
        $("#textError").show();
        formValid = false;
        // return false;
      }
      // return formValid;

    });

  }

});
