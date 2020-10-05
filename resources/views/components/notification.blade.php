@php( $sender = App\User::find( $notification->notifyby_id ) )
<a href="{{url("/userprofile/$sender->id")}}">
    <div class="notfication-details">
        <div class="noty-user-img">
            <img src="{{ url("/storage/uploads/avatar/$sender->profile_image") }}" alt="">
        </div>
        
        <div class="notification-info">
            <h3>{{ $notification->text }}</h3>
            
            <span>on {{ $notification->datetime }}</span>
        </div>
        <!--notification-info -->
    </div>
</a>