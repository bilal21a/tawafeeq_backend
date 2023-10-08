<script>
    hide_chat_area(1)
    @if (check_expiry() && $chat_id != null)
        const opponent_id = "{{ $partner_id }}"
        const load_chat_id = "{{ $chat_id }}"
        var block_type = "{{ $chat->initiator_id == auth()->id() ? 'partner_block' : 'initiator_block' }}";

        getChatHeads()
        // firebase_chat_counts()
        openChat(load_chat_id, opponent_id, block_type)
    @endif
    @if ($page == 'chat')
        getChatHeads()
        firebase_chat_counts()
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
            url: "{{ route('chat.chats_heads') }}",
            success: function(data) {
                if (!data) {
                    $('.chat_work').hide()
                    $('.chat_error').show()
                    stop_full_load()
                } else {
                    $('.chat_heads').html(data)
                    stop_full_load()
                }
            },
        });
    }

    function openChat(chat_id, partner_id, block_type = 0) {
        console.log('block_type: ', block_type);
        start_full_load()
        read_chat(chat_id)
        set_chat_attributes(partner_id, chat_id, block_type)
        get_chat(chat_id, partner_id)
        scroll_to_top()
        show_chat_area()
        check_block_status()
        stop_full_load()
    }

    $('#chatInput').on('keydown', function(e) {
        if (e.keyCode === 13) {
            console.log('e.keyCode: ', e.keyCode);
            ChatSend()
        }
    });

    function ChatSend() {
        var message = $('#chatInput').val()
        var conn = $('#internet_conn').val()
        if (message != "" && conn != "") {
            $('#chatInput').val('')
            console.log('message: ', message);
            start_chat_loading()
            const url = "{{ route('chat.send_message') }}";
            const data = {
                internet_conn: conn,
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

    }

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

    function block_user(chat_id, type = 1) {
        if (type == 1) {
            $('.unblock_btn').show()
            $('.block_btn').hide()
        } else {
            $('.block_btn').show()
            $('.unblock_btn').hide()
        }
        var url = '{{ route('chat.chat_block', [':id', ':type']) }}';
        url = url.replace(':id', chat_id).replace(':type', type);
        console.log('url: ', url);

        $.ajax({
            type: 'GET',
            url,
            success: function(data) {
                console.log('data: ', data);
                if (data) {
                    hide_chat_area()
                } else {
                    show_chat_area()
                }

            },
        });
    }

    function set_chat_attributes(partner_id, internet_conn, block_type) {
        $('.chats_active_all').removeClass('active');
        $(`#chat_active_${partner_id}`).addClass('active');
        var contactName = $('#contactName_' + partner_id).text();
        if (block_type == 1) {
            var block_btn =
                `<p class="bloack_status unblock_btn cursor-pointer" onclick="block_user(${internet_conn},0)">unblock</p>
            <p class="bloack_status block_btn cursor-pointer" style="display:none"  onclick="block_user(${internet_conn},1)">block</p>`
        } else {
            var block_btn = `<p class="bloack_status cursor-pointer unblock_btn" style="display:none"  onclick="block_user(${internet_conn},0)">unblock</p>
            <p class="bloack_status block_btn cursor-pointer"  onclick="block_user(${internet_conn},1)">block</p>`
        }
        $('.active_chat_name').html(`${contactName} ${block_btn}`);
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

    function show_chat_area() {
        $('.footer-chat-message-user').show()
        $('.footer-chat-blocked').hide()
    }

    function hide_chat_area(only=0) {
        $('.footer-chat-message-user').hide()
        if (only==0) {
            $('.footer-chat-blocked').show()
        }
    }

    function check_block_status() {
        var partner_block = $('#partner_block').val()
        var initiator_block = $('#initiator_block').val()
        if (partner_block == 1 || initiator_block == 1) {
            hide_chat_area()
        }
    }
</script>
