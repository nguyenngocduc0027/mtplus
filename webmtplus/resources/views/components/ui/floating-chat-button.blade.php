<div class="chat-float position-fixed bottom-0 end-0 p-3 d-flex flex-column gap-2">
    <!-- Call -->
    <a href="tel:{{ $phone }}" class="btn bg-white rounded-circle shadow chat-btn" title="Gọi điện">
        <img src="{{ asset('/frontend/assets/img/icons/phone-call.png') }}" alt="" class="w-75 object-fit-cover">
    </a>
    <!-- Telegram -->
    <a href="https://t.me/{{ $telegram }}" target="_blank" class="btn bg-white rounded-circle shadow chat-btn"
        title="Chat Telegram">
        <img src="{{ asset('/frontend/assets/img/icons/telegram.png') }}" alt="" class="w-75 object-fit-cover">
    </a>
    <!-- WhatsApp -->
    <a href="https://wa.me/{{ $phone }}" target="_blank" class="btn bg-white rounded-circle shadow chat-btn"
        title="Chat WhatsApp">
        <img src="{{ asset('/frontend/assets/img/icons/whatsapp.png') }}" alt="" class="w-75 object-fit-cover">
    </a>
    <!-- Messenger -->
    <a href="{{ $messenger }}" target="_blank" class="btn bg-white rounded-circle shadow chat-btn" title="Chat Messenger">
        <img src="{{ asset('/frontend/assets/img/icons/messenger.png') }}" alt="" class="w-75 object-fit-cover">
    </a>
</div>
