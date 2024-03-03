@foreach ($comments as $comment )
<div class="anime__review__item">
    <div class="anime__review__item__pic">
        <img src="{{ asset('profileFoto/'.$comment->user->picture) }}" alt="">
    </div>
    <div class="anime__review__item__text mb-2">
        <h6>{{$comment->user->username}} - <span>{{$comment->created_at->format('d M Y')}}</span></h6>
            <p>{{$comment->isi_komentar}}</p>
    </div>
</div>
@endforeach
