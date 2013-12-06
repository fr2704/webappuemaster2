/*
 * Get the subscription form
 */
function getCreateAcountForm() {
    $.ajax({
        type: "POST",
        url: "Controllers/controller.User.php",
        data: {locate: "GetCreateAcountForm"}
    })
            .done(function(msg) {
        $("#loginsubscribefroms").html(msg);
    });

}


/*
 * Get The login from
 */
function getLoginForm() {
    $.ajax({
        type: "POST",
        url: "Controllers/controller.User.php",
        data: {locate: "GetLoginForm"}
    })
            .done(function(msg) {
        $("#loginsubscribefroms").html(msg);
    });

}