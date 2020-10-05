<!-- 165px size profile_image/avatar/default -->
@if ( $user->profile_image != NULL && $user->profile_image != "")
<img src="{{asset("/storage/uploads/avatar/$user->profile_image")}}" style="width: 165px;" alt="profile_image">

@elseif ($user->profile_image == NULL && $user->profile_image == "" && $user->avatar != NULL && $user->avatar != "" )
<img src="{{ $user->avatar }}" style="width: 165px;" alt="avatar">

@elseif($user->avatar == NULL && $user->avatar == "" )
<img src="{{asset("/storage/uploads/avatar/user.png")}}" style="width: 165px;" alt="default">
@endif



<!-- 30px size profile_image/avatar/default  -->
@if ( $user->profile_image != NULL && $user->profile_image != "")
<img src="{{asset("/storage/uploads/avatar/$user->profile_image")}}" style="width: 30px;" alt="profile_image">

@elseif ($user->profile_image == NULL && $user->profile_image == "" && $user->avatar != NULL && $user->avatar != "" )
<img src="{{ $user->avatar }}" style="width: 30px;" alt="avatar">

@elseif($user->avatar == NULL && $user->avatar == "" )
<img src="{{asset("/storage/uploads/avatar/user.png")}}" style="width: 30px;" alt="default">
@endif


<!-- 90px size profile_image/avatar/default  -->
@if ( $user->profile_image != NULL && $user->profile_image != "")
<img src="{{asset("/storage/uploads/avatar/$user->profile_image")}}" style="width: 90px; border-radius: 100%;" alt="profile_image">

@elseif ($user->profile_image == NULL && $user->profile_image == "" && $user->avatar != NULL && $user->avatar != "" )
<img src="{{ $user->avatar }}" style="width: 90px; border-radius: 100%;" alt="avatar">

@elseif($user->avatar == NULL && $user->avatar == "" )
<img src="{{asset("/storage/uploads/avatar/user.png")}}" style="width: 90px; border-radius: 100%;" alt="default">
@endif




<!-- Suggestions image  -->
@if ( $suggestion->profile_image != NULL && $suggestion->profile_image != "")
<img src="{{ asset("/storage/uploads/avatar/$suggestion->profile_image") }}" width="30px" alt="">

@elseif ($suggestion->profile_image == NULL && $suggestion->profile_image == "" && $suggestion->avatar != NULL && $suggestion->avatar != "" )
<img src="{{ $suggestion->avatar }}" style="width: 30px;" alt="avatar">

@elseif($suggestion->avatar == NULL && $suggestion->avatar == "" )
<img src="{{asset("/storage/uploads/avatar/user.png")}}" style="width: 30px;" alt="default">
@endif