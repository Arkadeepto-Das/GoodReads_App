$("#password").on("blur", passwordValidation);

function passwordValidation()
{
  var pattern = /^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=!\?]{8,20}$/;
  if(pattern.test($(this).val())){
    $(".password").css("display","none");
  }
  else {
    $(".password").css("display","block");
  }
};
