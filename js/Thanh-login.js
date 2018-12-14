$("#checkValidate").hide();
$(document).ready(function () {
    $('#email').blur(function () {
        $.get(
            'Controller/checkValidate.php',
            "email-thanh=" + $('#email').val(),
            function (d) {
                if (d != "")
                    $("#checkValidate").html(d).show();
                else {
                    $("#checkValidate").html("");
                    $("#checkValidate").hide();
                }
            });
    });
});
$(document).ready(function () {
    $("form").submit(function () {
        var text = $("#checkValidate").html();
        if (text != "") return false;
        return true;
    });
});