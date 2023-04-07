$(function() 
{
    $(".upload").hide();
    $(".file_upload").click(function() {
      $("#uploadScreen").show();
    });
    
    $(".close").click(function() {
      $("#uploadScreen").hide();
    });
  
    $(window).click(function(event) {
      if (event.target.id === "uploadScreen") {
        $("#uploadScreen").hide();
      }
    });

    $(".nftupload").click(function()
    {
        
    });
  });