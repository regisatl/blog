<div class="card mb-3 text-center">
    <div class="card-body">
        <h4 class="card-header fw-semibold bg-secondary text-light fs-5">{{ $article['user']['name'] }}</h4>
        <p class="card-text mt-2">{{ $article['title'] }}</p>
        <a class="btn btn-success fw-semibold bg-gradient py-3 mx-3 w-75"
            href="/articles/{{ $article->id }} ">Comment</a>
    </div>
</div>
