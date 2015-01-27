$('#send-mail').on("submit", function() {
    if(!is_valid_inp($("#bid-phone").val()))
        return false;

    $.post(
        "/s/send-mail",
        {
            ajax_req: '1',
            name: $("#bid-name").val(),
            phone: $("#bid-phone").val(),
            deals: $("#bid-deals").val()
        },
        send_mail_end
    );

    return false;
});

function send_mail_end(res) {
    $('#send-mail-success').show();
    $('#send-mail-content').hide();
}

$("#zak-ag").on("click", function() {
    $('#send-mail-success').hide();
    $('#send-mail-content').show();

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