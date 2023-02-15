$(document).ready(function()
{
    var img = $("img#onClick");
    var array = ["Images/nftimage1.png", "Images/nftimage2.png", "Images/nftimage3.png",
                 "Images/nftimage4.png", "Images/nftimage5.png", "Images/nftimage6.png", 
                 "Images/nftimage7.png"];
    var count = 0;

    $(".image_change_btn").click(function()
    {
        img.attr("src", array[count]);
        count++;
        if (count >= array.length)
        {
            count = 0;
        }
    });
});
