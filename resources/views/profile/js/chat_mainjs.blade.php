<script>
    @if ($chat_id != null)
        const opponent_id = "{{ $partner_id }}"
        const load_chat_id = "{{ $chat_id }}"

        getChatHeads()
        // firebase_chat_counts()
        openChat(load_chat_id, opponent_id)
    @endif
    $('.chat_nav_item').on('click', function(event) {
        getChatHeads()
        firebase_chat_counts()
    });


    function getChatHeads() {
        start_full_load()
        $.ajax({
            type: 'GET',
            async: false,
            url:"{{ route('chat.chats_heads') }}",
            success: function(data) {
                if (!data) {
                    $('.chat_work').hide()
                    $('.chat_error').show()
                    stop_full_load()
                }else{
                    $('.chat_heads').html(data)
                    stop_full_load()
                }
            },
        });
    }

    function openChat(chat_id, partner_id) {
        start_full_load()
        read_chat(chat_id)
        set_chat_attributes(partner_id, chat_id)
        get_chat(chat_id, partner_id)
        scroll_to_top()
        stop_full_load()
    }

    function ChatSend() {
        var message = $('#chatInput').val()

        start_chat_loading()
        const url = "{{ route('chat.send_message') }}";
        const data = {
            internet_conn: $('#internet_conn').val(),
            message: message
        };

        axios.post(url, data)
            .then(response => {
                stop_chat_loading()

            })
            .catch(error => {
                stop_chat_loading()

            });
    }

    // function firebase_chat_counts() {
    //     const authenticatedUserId = "{{ auth()->id() }}"; // Replace with the actual authenticated user's ID

    //     const chatsRef = firebase.database().ref('chats');
    //     const matchedChats = [];

    //     chatsRef.on("value", snapshot => {

    //         snapshot.forEach(childSnapshot => {
    //             const chatId = childSnapshot.key;
    //             const chat = childSnapshot.val();

    //             if (chat.initiator_id == authenticatedUserId || chat.partner_id ==
    //                 authenticatedUserId) {
    //                 chat_count = chat.initiator_id == authenticatedUserId ? chat.initiator_count : chat
    //                     .partner_count
    //                 if (chat_count > 0) {
    //                     $(`.unread_${chat.id}`).show()
    //                     $(`.unread_${chat.id}`).html(chat_count)
    //                     $('.chat_new').show()
    //                 } else {
    //                     $(`.unread_${chat.id}`).hide()
    //                     $('.chat_new').hide()
    //                 }
    //             }
    //         });
    //     });
    // }

    function start_chat_loading() {
        $('.chat_send_btn').hide()
        $('.chat_loading_btn').show()
    }

    function stop_chat_loading() {
        $('#chatInput').val('')
        $('.chat_send_btn').show()
        $('.chat_loading_btn').hide()
    }

    function scroll_to_top() {
        var myDiv = $('.messages_container');
        myDiv.scrollTop(myDiv[0].scrollHeight);
    }

    function read_chat(chat_id) {
        var url = '{{ route('chat.chat_id', ':id') }}';
        url = url.replace(':id', chat_id);

        $.ajax({
            type: 'GET',
            url,
            success: function(data) {

                $(`.unread_${chat_id}`).hide()
            },
        });
    }

    function get_chat(chat_id, partner_id) {
        var itemsRef = firebase
            .database()
            .ref('messages').orderByChild('chat_id').equalTo(Number.parseInt(chat_id));

        itemsRef.on("value", snapshot => {

            let data = snapshot.val();
            let messages = [];
            if (data) {
                Object.keys(data).forEach(key => {
                    // simply replacing all \n with a br tag...
                    data[key].message ?
                        (data[key].message = data[key].message.replace(
                            /(\n)/g,
                            `<br />`
                        )) :
                        "";
                    messages.push({
                        ...data[key]
                    });
                });
            }
            setMessages(messages, partner_id)
            scroll_to_top()
            // setLoading(false);
        });
    }

    function setMessages(messages, partner_id) {

        sender_id = "{{ auth()->id() }}";
        sender_img = "{{ auth()->user()->img_url }}"
        reciver_img = $('#contactImg_' + partner_id).attr('src')

        var reciverName = $('#contactName_' + partner_id).text();
        var senderName = "{{ auth()->user()->name }}";


        const messeges_html = messages.map(message => `
        <div class="message-user-${message.sender_id==sender_id?'right':'left'}">
            <div class="message-user-${message.sender_id==sender_id?'right':'left'}-img">
                <img src="${message.sender_id==sender_id?sender_img:reciver_img}"
                    alt="">
                <p class="mt-0 mb-0"><strong>${message.sender_id==sender_id?senderName:reciverName}</strong></p>
                <small>${moment(message.created_at).fromNow()}</small>
            </div>
            <div class="message-user-${message.sender_id==sender_id?'right':'left'}-text">
                <strong>${message.body}</strong>
            </div>
        </div>
        `);

        $('.body-chat-message-user').html(`${messeges_html.join('')}`);
    }

    function set_chat_attributes(partner_id, internet_conn) {
        $('.chats_active_all').removeClass('active');
        $(`#chat_active_${partner_id}`).addClass('active');
        var contactName = $('#contactName_' + partner_id).text();
        $('.active_chat_name').html(contactName);
        var contactsubHeading = $('#contactsubHeading_' + partner_id).text();
        $('.active_chat_subHeading').html(contactsubHeading);
        var contactImg = $('#contactImg_' + partner_id).attr('src');

        $('#active_chat_img').attr('src', contactImg);
        $('#internet_conn').val(internet_conn);
    }

    function start_full_load() {
        $('.main_card').addClass('overlay-spinner')
    }

    function stop_full_load() {
        $('.main_card').removeClass('overlay-spinner')
    }
</script>
