$(document).ready(function()
{
    var img = $("img#rotating_img").get(0);
    var array = ["Images/bored-apes.jpg", "Images/nftimage8.png", "Images/nftimage9.png"];
    var count = 0;

    setInterval(function()
    {
       img.setAttribute("src", array[count]);
       count++;
       if (count >= array.length)
       {
          count = 0;
      }
    }, 3000);
});


