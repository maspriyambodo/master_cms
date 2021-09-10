var pusher = new Pusher('4587e4cb86b14bb98e69', {
    cluster: 'ap1'
});
setInterval(function () {
    if (pusher.connection.state === 'disconnected') {
        console.log(pusher.connection.state);
        pusher.connect();
    } else {
        console.log(pusher.connection.state);
    }

}, 60000);
var channel = pusher.subscribe('app_notification-channel');
channel.bind('app_notification-event', function (data) {
    $('#notif_count').text(data.tot_notif);
    $('#kt_quick_panel_logs').empty();
    var audio = {};
    audio["walk"] = new Audio();
    audio["walk"].src = "assets/media/sound/notification_sound.mp3";
    audio["walk"].play();
});
function dir_notif() {
    $('#kt_quick_panel_logs').empty();
    $.ajax({
        url: "Notification/Get_notif",
        cache: false,
        contentType: false,
        processData: true,
        success: function (data) {
            if (data[0].title_notif === 'kosong') {
                console.log('kosong');
            } else {
                var i;
                for (i = 0; i < data.length; i++) {
                    $('#kt_quick_panel_logs').append(
                            '<div class="d-flex align-items-center flex-wrap mb-5">'
                            + '<div class="d-flex flex-column flex-grow-1 mr-2">'
                            + '<a href="' + data[i].url_link + '" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">'
                            + data[i].title_notif
                            + '</a>'
                            + '<span class="font-weight-bold text-muted">'
                            + data[i].syscreatedate
                            + '</span>'
                            + '</div>'
                            + '</div>'
                            );
                }
            }
        },
        error: function (jqXHR) {

        }
    });
}