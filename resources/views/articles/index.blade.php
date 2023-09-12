<div class="card mb-3 text-center" style="height: 300px">
    <div class="card-body">
        <h4 class="card-header fw-semibold bg-secondary bg-gradient text-light fs-5">{{ $article['user']['name'] }}</h4>
        <p class="card-text mt-1">{{ $article['title'] }}</p>
        <div class="footer">
            <a class="btn btn-light shadow fw-semibold bg-gradient py-2 mx-3 w-75"
                href="/articles/{{ $article->id }} ">Comment</a>
        </div>
    </div>
</div>
