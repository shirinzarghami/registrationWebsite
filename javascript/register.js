function clearMessages()
{
  $('#warning_alert').hide();
  $('#success_alert').hide();
}

function clearInputs()
{
  $('#groupName').val('');
}


$(document).ready(function(){

  clearMessages();
  $("#submit").click(function(event){
    event.preventDefault();
    clearMessages();
    var groupName = $('#groupName').val();
    if (groupName == "") {
      $('#warning_alert').show();
    }else{
      $.post("verify.php",
      {
        objectType : "group",
        groupName : groupName
      },
      function(data, status) {
        if (status == 'success') {
          clearInputs();
          $('#success_alert').show();
        } else {
          $('#warning_alert').show();
        }
      });
     }
  });

  $("#reset-btn").click(function(event){
    clearInputs();
    clearMessages();
  });

 $("input").focus(function(){
  clearMessages();
 });
});











