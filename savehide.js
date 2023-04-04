$(document).ready(function()
{
    $(".button3").click(function() {
        var img = $("#hide_unhide");
        if (img.is(":hidden")) 
        {
          img.show();
        } else 
        {
          img.hide();
        }
      });
});
