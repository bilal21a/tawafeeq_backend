var firebaseConfig = {
    apiKey: "AIzaSyCglXM6RATdwKebapefwd9k4LLgbq3hCRc",
    authDomain: "tawafeeqclone-b14fd.firebaseapp.com",
    databaseURL: "https://tawafeeqclone-b14fd-default-rtdb.firebaseio.com",
    projectId: "tawafeeqclone-b14fd",
    storageBucket: "tawafeeqclone-b14fd.appspot.com",
    messagingSenderId: "773303799890",
    appId: "1:773303799890:web:b99bc4b1ed55c66bb50f8b"
};

function generatealert(color = 'primary', message, timer = 5000) {
    color = color == 'info' ? 'primary' : color
    const rand = Math.ceil(Math.random() * 10000000);
    var notification_area = $('.notification_area');
    const noti = `<div id="" class="toast mytoast_${rand} align-items-center bg-${color} border-0 fade show mb-2 myalertopacity" role="alert" aria-live="assertive" aria-atomic="true">
                  <div class="d-flex" dir="ltr">
                      <div class="toast-body">${message}</div>
                      </div>
                </div>`
        //   <button type="button" class= me-2 m-auto" style="background:transparent;border:none" data-bs-dismiss="toast"
        //       aria-label="Close" onClick="closeAlert(${rand})">X</button>
    notification_area.append(noti)
    timeoutClose(rand, timer)
}

const timeoutClose = async(rand, timer) => {
    let timeout = setTimeout(async() => {
        $(`.mytoast_${rand}`).remove();
    }, timer)

    $(`.mytoast_${rand}`).on('mouseover', async() => {
        clearTimeout(timeout)

        $(`.mytoast_${rand}`).on('mouseleave', () => {
            setTimeout(async() => {
                $(`.mytoast_${rand}`).remove();
            }, timer)
        })
    })

}

function closeAlert(rand) {

    $(`.mytoast_${rand}`).remove();
}

function generate_all_alert(color = 'primary', message, time) {
    var stillUtc = moment.utc(time).toDate();
    var local = moment(stillUtc).local().fromNow();

    color = color == 'info' ? 'primary' : color
    var notification_area = $('.all_noti');
    const noti = `<div class="alert alert-${color}" role="alert">${message}
    <div class="text-extra-small fw-medium text-muted">${local}</div>
    </div>`
    notification_area.append(noti)
}




var fire = firebase.initializeApp(firebaseConfig);
var user_idd = parseInt($('#dev_id_notification').val())
var notificationsRef = firebase.database().ref().child("notifications").orderByChild("user_id").equalTo(user_idd);
var first = true;

// TODO only for testing purposes to list all entries.
notificationsRef.limitToLast(100).on('value', function(snapshot) {

    $('.all_noti').html(''); // clear prev notifications chapi

    Object.values(snapshot.val()) // convert object to array
        .reverse() // reverse
        .forEach((value) => {

            generate_all_alert(value.alert_type, value.body, value.created_at)
        });
});


notificationsRef.limitToLast(1).on(
    "child_added" /** 'value' // TODO for testing purposes to see all */ ,
    (snapshot) => {
        let data = snapshot.val();

        if (first) {
            first = false;
        } else {
            // FIXME Design is not cool make sure you place it in chiller.
            generatealert(data.alert_type, data.body)
        }
    }
);