@if ( Auth::user() )
@if ( Auth::user()->id != $user->id )
@php
$auth_user = Auth::user();
$request = $auth_user->requested_connection( $user->id );
@endphp

@if ( $request && $request->count() > 0 )
@if ( $request->status == 1 ) {{-- This means request is pending --}}
<button class="btn btn-primary js-connection-btn" data-task="cancel-connection-request" data-user-id="{{ $user->id }}">
  <i class="la la-minus"></i><span class="sp"> Cancel Request</span>
</button>
@else
@if ( $request->status == 2 ) {{-- This means request is accepted --}}
<button class="btn btn-primary js-connection-btn" data-task="remove-connection" data-user-id="{{ $user->id }}">
  <i class='la la-minus'></i> Familiar
</button>

@endif
@endif
@else
@php( $requested = $auth_user->request_recieved( $user->id ) )

@if ( $requested && $requested->count() )
@if ( $requested->status == 1 ) {{-- This means request is pending --}}
<button class="btn btn-primary js-connection-btn" data-task="decline-connection-request" data-user-id="{{ $user->id }}">
  <i class="la la-minus"></i> Decline
</button>

<button class="btn btn-primary js-connection-btn" data-task="accept-connection-request" data-user-id="{{ $user->id }}">
  <i class="la la-plus"></i> Accept
</button>
@else
@if ( $requested->status == 2 ) {{-- This means request is accepted --}}
<button class="btn btn-primary js-connection-btn" data-task="remove-connection" data-user-id="{{ $user->id }}">
  <i class='la la-minus'></i> Familiar
</button>

@endif
@endif
@else
<button class="btn btn-primary js-connection-btn" data-task="request-connection" data-user-id="{{ $user->id }}">
  <i class="fas fa-user-slash"></i><span class="sp">&nbsp; &nbsp; Not Familiar</span>
</button>
@endif
@endif
@endif
@else
<button class="btn btn-primary js-connection-btn" data-task="request-connection" data-user-id="{{ $user->id }}">
  <i class="fas fa-user-slash"></i><span class="sp">&nbsp; &nbsp; Not Familiar</span>
</button>
@endif