function clearMessages()
{
  $('#warning_alert').hide();
  $('#success_alert').hide();
}

function clearInputs()
{
  $('#groupName').val('');
}


function clearErrors()
{
  $('.form-group').removeClass('has-error has-feedback')
  $('span.glyphicon-remove').remove();
  $('input').popover('destroy');
}

$(document).ready(function(){
  clearMessages();
  $("#submitUser").click(function(event){
    event.preventDefault();
    clearMessages();
    var groupId = $('#groupId').val();
    var userName = $('#userName').val();
    var email = $('#email').val();
    $.post("verify.php",
    {
      objectType : "user",
      groupId : groupId,
      userName : userName,
      email : email
    },
    function(data, status) {
      if (data == 'success') {
        clearInputs();
        $('#success_alert').show();
      } else {
        $('#warning_alert').show();
      }
    });
  });

  $("#reset-btn").click(function(event){
    clearInputs();
    clearMessages();
    clearErrors();
    // $('input').popover('hide')

  });
 $("input").focus(function(){
  clearMessages();
 });




});
