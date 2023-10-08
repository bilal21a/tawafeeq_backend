@foreach ($chats as $chat)
    @php
        $user = $chat->initiator_id == auth()->id() ? $chat->partner : $chat->initiator;
        $count_type = $chat->initiator_id == auth()->id() ? 'initiator_count' : 'partner_count';
        $block_type = $chat->initiator_id == auth()->id() ? 'partner_block' : 'initiator_block';
    @endphp
    @isset($user->id)

    <div class="user-chat chats_active_all" id="chat_active_{{ $user->id }}"
        onclick="openChat({{ $chat->id }},{{ $user->id }},{{ $chat->$block_type }})">
        <div class="user-chat-img">
            <img src="{{ $user->img_url }}" id="contactImg_{{ $user->id }}" alt="">
            <div class="{{ isUserActive($user->last_seen_at)?'online':'offline' }}"></div>
        </div>
        <input type="hidden" id="initiator_block" value="{{ $chat->initiator_block }}">
        <input type="hidden" id="partner_block" value="{{ $chat->partner_block }}">

        <div class="user-chat-text">
            <div class="d-flex">
                <div>
                    <p class="mt-0 mb-0"><strong id="contactName_{{ $user->id }}">{{ $user->name }}</strong></p>
                    <small id="contactsubHeading_{{ $user->id }}">{{ $user->nationality }} -
                        {{ $user->city }}</small>
                </div>
                <div class="badge bg-primary unread_{{ $chat->id }}" id="contactUnread"
                    style="height: fit-content; display:{{ $chat->$count_type > 0 ? 'block' : 'none' }}">
                    {{ $chat->$count_type }}</div>
            </div>
        </div>
    </div>
    @endisset

@endforeach
