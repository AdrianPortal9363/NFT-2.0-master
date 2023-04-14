function validation()
{
    $(function() 
{
    $('.error').hide();
    $(".button").click(function() 
    {
        $('.error').hide();
        var name = $("input#name").val();
        var email = $("input#email").val();
        var phone = $("input#phone").val();

        if (name == "") 
        {
            $("label#name_error").show();
            $("input#name").focus();
            return false;
        }
    
        if (email == "") 
        {
            $("label#email_error").show();
            $("input#email").focus();
            return false;
        }
    
        if (phone == "") 
        {
            $("label#phone_error").show();
            $("input#phone").focus();
            return false;
        }
    });
});
}

