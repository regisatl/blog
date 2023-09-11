<div class="card mb-3 text-center">
    <p class="card-header fw-semibold">{{ $article['title'] }}</p>
    <p class="mt-3">{{ $article['body'] }}</p>
    <p class="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad non magnam cum repudiandae, beatae
        recusandae nobis perspiciatis officiis delectus ipsa nam voluptatibus, eius et molestias fuga facere earum saepe
        vel.
    </p>
    <a class="btn btn-primary py-3" href="/articles/ {{ $article->id }} ">Articles</a>
</div>
