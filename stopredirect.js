$(document).ready(function() 
{
    $('form').submit(function(event) 
    {
        event.preventDefault();
        $.ajax({
            url: 'submit.php',
            type: 'POST',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function(data) 
            {
                alert(data);
            },
            error: function(jqXHR, textStatus, errorThrown) 
            {
                console.log(textStatus, errorThrown);
            }
        });
    });
});
