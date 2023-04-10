$(document).ready(function()
{
    $('.error').hide();
    $("form").submit(function()
    {
        $('.error').hide();
        var login = true;
        var username = $("input#Username_").val();
        if (username == "" || !username.charAt(0) == /^(?=.*[0-9])(?=.*[a-zA-Z])/)
        {
            $("label#usererror_").show();
            $("input#Username_").focus();
            return login = false;
        }
        var password = $("input#Password_").val();
        if (password == "" || password.length < 8 || password.length > 16 || !/^(?=.*[0-9])(?=.*[a-zA-z])(?=.*[!$])/.test(password))
        {
            $("label#passerror_").show();
            $("input#Password_").focus();
            return login = false;
        }
        var submit = $("input#sub_button").get(0);
        if (login)
        {
            $.ajax({
                url: "start_session.php",
                method: "POST",
                data: { username: username },
                success: function(response) 
                {
                    console.log(response);
                    window.location.href = "loginsuccessful.html";
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            });
        }
    });
});