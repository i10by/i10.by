$(window).scroll(function() {
    if($(window).scrollTop() > 150)
        $('nav').addClass('white');
    else
        $('nav').removeClass('white');
});

$('a').on("click", function() {
    var elementClick = $(this).attr("href");
    var destination = $(elementClick).offset().top;

        $("body,html").animate({"scrollTop": destination}, 250);

    if(elementClick == "#bid")
        $('#bid-name').focus();

    return false;
});

$('.zak').on("click", function() {
    var destination = $('#bid').offset().top;

    $("body,html").animate({"scrollTop": destination}, 250);

    $('#bid-name').focus();

    return false;
});

$('#send-mail').on("submit", function() {
    if(!is_valid_inp($("#bid-phone").val()))
        return false;

    var d = {name: $("#bid-name").val(), phone: $("#bid-phone").val(), deals: $("#bid-deals").val()};

    $.ajax({
        type: "post",
        url: "app/scripts/send-mail.php",
        data: d,
        dataType: "html",
        success: function(res) {
            send_mail_end(res);
        }
    });

    return false;
});

function send_mail_end(res) {
    $('#send-mail-success').fadeIn(50);
    $('#send-mail-content').fadeOut(50);
}

$("#zak-ag").on("click", function() {
    $('#send-mail-success').fadeOut(50);
    $('#send-mail-content').fadeIn(50);

    $("#bid-name").val("");
    $("#bid-phone").val("");
    $("#bid-deals").val("");

    $('#bid-name').focus();
});

function is_valid_inp(inp) {
    return !(inp == "" || inp == null);
}

(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-57097651-1', 'auto');
ga('send', 'pageview');