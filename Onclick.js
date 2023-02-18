$(document).ready(function()
{
    var img = $("img#onClick");
    var array = ["Images/nftimage1.png", "Images/nftimage2-e.png", "Images/nftimage3-e.png",
                 "Images/nftimage4-e.png", "Images/nftimage5-e.png", "Images/nftimage6-e.png", 
                 "Images/nftimage7-e.png"];
    var count = 0;

    $(".image_change_btn").click(function()
    {
        count++;
        img.attr("src", array[count]);
        if (count >= 6)
        {
            count = -1;
        }
    });

    $(".image_change_btn1").click(function()
    {
        count--;
        img.attr("src", array[count]);
        if (count <= 0)
        {
            count = 7;
        }
    });
});
