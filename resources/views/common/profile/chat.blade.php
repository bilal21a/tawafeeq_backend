<div class="content-chat mt-20">
    <div class="content-chat-user">
        <div class="head-search-chat">
            <h4 class="text-center">Chat Finder</h4>
        </div>

        <div class="list-search-user-chat mt-20 chat_heads">
        </div>
    </div>

    <div class="content-chat-message-user active">
        <div class="head-chat-message-user">
            <img src="{{ asset('assets/img/noimg.png') }}" id="active_chat_img"
                alt="">
            <div class="message-user-profile">
                <p class="mt-0 mb-0 text-white"><strong class="active_chat_name"></strong>
                </p>
                <small class="text-white active_chat_subHeading">
                    {{-- <p class="offline  mt-0 mb-0"></p> --}}
                    Offline
                </small>
            </div>
        </div>
        <div class="body-chat-message-user messages_container" dir="ltr">

        </div>
        <div class="footer-chat-message-user">
            <div class="message-user-send">
                <input type="text" placeholder="Send Message" id="chatInput">
            </div>
            <input type="hidden" id="internet_conn" value="">
            <button type="button" class="chat_send_btn" onclick="ChatSend()">
                <i data-acorn-icon="send" class="d-inline-block"></i>
            </button>
            <button type="button" class="custom_chat_loader chat_loading_btn"
                onclick="ChatSend()" style="display: none">
                <span class="spinner-border spinner-border-sm" role="status"
                    aria-hidden="true"></span>
            </button>
        </div>
    </div>
</div>
