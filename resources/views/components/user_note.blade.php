<div class="user-profile-ov">
    <h3>{{ $note->title }} <i class="fa fa-trash pull-right delete_note_btn" data-note-id="{{ $note->note_id }}" aria-hidden="true"></i></h3>
    <h4>{{ date( "d M, Y H:i A", strtotime($note->created_at)) }}</h4>
    <p>{{ $note->body }}</p>
</div>