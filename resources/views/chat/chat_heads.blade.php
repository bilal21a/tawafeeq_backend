@foreach ($users as $user)
    <div class="user-chat chats_active_all" id="chat_active_{{ $user->id }}" onclick="openChat({{ $user->id }})">
        <div class="user-chat-img">
            <img src="{{ asset('assets/img/homepage_img/woman.png') }}" id="contactImg_{{ $user->id }}" alt="">
            <div class="offline"></div>
        </div>

        <div class="user-chat-text">
            <p class="mt-0 mb-0"><strong id="contactName_{{ $user->id }}">{{ $user->name }}</strong></p>
            <small>Hi, how are you?</small>
        </div>
    </div>
@endforeach
