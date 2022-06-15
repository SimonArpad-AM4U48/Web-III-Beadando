<div class="mt-5 card">
    <h5 class="card-header">{{__(('Comments'))}}</h5>
    <div class="card-body">
        @auth
            <h5 class="card-title">
                <form action="{{ route('torrent.comment', $torrent) }}" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <input name="comment" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-success" type="submit">{{__(('Comment'))}}</button>
                    </div>
                </form>
            </h5>
        @endauth
            @if ($torrent->comments->isNotEmpty())
                @foreach($torrent->comments as $comment)
                    <div class="card mb-3" id="comment-{{$comment->id}}">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a class="link" href="{{ route('profile.show', $comment->user) }}">
                                    <img class="rounded-circle me-2" width="25" src="{{ $comment->user->avatar }}" alt="{{ $comment->user->name }}">
                                    {{ $comment->user->name }}
                                </a>
                                | {{ $comment->created_at->diffForHumans() }}
                            </h5>
                            <p class="card-text">{{ $comment->message }}</p>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="alert alert-warning">
                    {{ __('No comment to show') }}
                </div>
            @endif
    </div>
</div>
