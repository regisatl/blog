<article class="mt-3">
    <h2 class="text-center text-dark mb-3 fw-semibold">Comments !</h2>
    <div class="text-dark">
        @foreach ($article->comments as $comment)
            <div class="card shadow mb-3">
                <div class="card-header">
                    <p>
                        <strong> {{ $comment->user->name }} </strong>
                        a réagi :
                    </p>
                </div>
                <div class="card-text px-3 pt-3">
                    <p>
                        {{ $comment->comment }}
                    </p>
                </div>
                <div class="card-footer">
                    <p>
                        <small><em> {{ $comment->created_at->diffForHumans() }} </em></small>
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</article>
