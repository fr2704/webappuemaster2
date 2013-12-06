(function() {
    var user = "web/js/Controllers/user.js";
    var contact = "web/js/Controllers/contact.js";
    var charset = {charset: "utf-8"};

    include(user, charset);
    include(contact, charset);

})()

function getActiveLink() {
    console.log($(location).attr('href'));
    switch (window.location.hash) {
        case '#home':
            $('.navbar-nav li').addClass('active');
            break;
        case '#contact':
            $('.navbar-nav li').addClass('active');
            break;
        case '/p/design.html':
            $('.nav-design').addClass('current');
            break;
        case '/p/photography.html':
            $('.nav-photography').addClass('current');
            break;
        case '/p/hosting.html':
            $('.nav-hosting').addClass('current');
            break;
    }
}


function include(src, attributes)
{
    try {
        attributes = attributes || {};
        attributes.type = "text/javascript";
        attributes.src = src;

        var script = document.createElement("script");
        for (aName in attributes)
            script[aName] = attributes[aName];

        document.getElementsByTagName("head")[0].appendChild(script);
        return true;
    } catch (e) {
        return false;
    }
}




function getAllArtistes() {
    $("#loader").show();
    $.ajax({
        type: "POST",
        url: "Controllers/controller.Music.php",
        data: {locate: "allArtists"}
    })
            .done(function(msg) {
        $("#content").html(msg);
        $("#loader").hide();
    });
}