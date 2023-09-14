<article class="mt-3 mb-5">
    <h2 class="text-dark text-center mb-3 fw-semibold">Article !</h2>
    <div class="card mb-3 shadow">
        <div class="card-body">
            <h4 class="card-header text-center fw-semibold bg-primary bg-gradient text-light fs-5">
                {{ $article->user->name }}</h4>
            <p class="card-text mt-1 fw-semibold">{{ $article->title }}</p>
            <p class="card-text mt-1">{{ $article->body }}</p>
        </div>
        <div class="card-footer">
            <a href="/articles/{{ $article->id }}/edit" class="btn btn-primary py-2 shadow-lg bg-gradient">Edit
                article</a>
            <a href="/articles/{{ $article->id }}/delete" class="btn btn-danger py-2 shadow-lg bg-gradient">Delete
                article</a>
        </div>
    </div>
</article>
