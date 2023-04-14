$(function() {
    $("#sub_button").click(function(e) {
        var username = $("input#Username_").val();
        var password = $("input#Password_").val();

        var usernamePattern = /^[a-zA-Z][a-zA-Z0-9]*$/;
        var passwordPattern = /^(?=.*[a-zA-Z])(?=.*\d)(?=.*[!*])[A-Za-z\d!*]{8,16}$/;

        if (!usernamePattern.test(username)) {
            alert("Check username specifications");
            $("input#Username_").focus();
            e.preventDefault();
            return false;
        }

        if (!passwordPattern.test(password)) {
            alert("Check password specifications");
            $("input#Password_").focus();
            e.preventDefault();
            return false;
        }
    });
});