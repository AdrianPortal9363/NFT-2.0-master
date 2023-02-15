$(document).ready(function()
{
    $('.error').hide();
    $("form").submit(function()
    {
        $('.error').hide();
        var login = true;
        var username = $("input#Username_").val();
        if (username == "" || !/^(?=.*[0-9])(?=.*[a-zA-Z])/.test(username))
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
            $("form").attr("action", "loginsuccessful.html");
        }
    });
});