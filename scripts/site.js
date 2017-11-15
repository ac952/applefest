$(document).ready(function() {

  $("#formSubmit").on("submit",function(){
    formValid = true;
    FnameIsValid = $("#fname").prop("validity").valid;
    if (FnameIsValid) {
      $("#fnameError").hide();
    } else {
      $("#fnameError").show();
      formValid = false;
    }

    LnameIsValid = $("#lname").prop("validity").valid;
    if(LnameIsValid) {
      $("#lnameError").hide();
    } else{
      $("#lnameError").show();
      formValid = false;
    }

    EmailIsValid = $("#email").prop("validity").valid;
    if (EmailIsValid) {
      $("#emailError").hide();
    } else {
      $("#emailError").show();
      formValid = false;
    }

    SubjectIsValid = $("#subject").prop("validity").valid;
    if(SubjectIsValid){
      $("#subjectError").hide();
    } else{
      $("#subjectError").show();
      formValid = false;
    }

    MessageIsValid = $("#message").prop("validity").valid;
    if(MessageIsValid){
      $("#textError").hide();
    }else{
      $("#textError").show();
      formValid = false;
    }

    return formValid

  });
});
