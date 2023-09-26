@foreach ($users as $user)
    <div class="user-chat chats_active_all" id="chat_active_{{ $user->id }}" onclick="openChat({{ $user->id }})">
        <div class="user-chat-img">
            <img src="{{ $user->img_url }}" id="contactImg_{{ $user->id }}" alt="">
            <div class="offline"></div>
        </div>

        <div class="user-chat-text">
            <p class="mt-0 mb-0"><strong id="contactName_{{ $user->id }}">{{ $user->name }}</strong></p>
            <small id="contactsubHeading_{{ $user->id }}">{{ $user->nationality }} - {{ $user->city }}</small>
        </div>
    </div>
@endforeach
