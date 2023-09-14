<ul class="nav nav-tabs nav-justified mt-3 fw-bold">
    @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}"><span class="fas fa-sign" style="font-size: 1.5rem"></span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}"><span class="fas fa-sign-in" style="font-size: 1.5rem"></span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('about') }}" title="About-us"><span class="fab fa-accessible-icon"
                style="font-size: 1.5rem"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('contact' )}}" title="Contact"><span class="fas fa-mail-bulk"
                        style="font-size: 1.5rem"></span></a>
            </li>
    @endguest

    @auth
        <li class="nav-item">
            <a class="nav-link" href="/" title="home"><span class="fas fa-home"
                    style="font-size: 1.5rem"></span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="/articles" title="Articles"><span class="fas fa-blog"
                    style="font-size: 1.5rem"></span></a>
        </li>
        @can('create', 'App\Models\Article')
            <li class="nav-item">
                <a class="nav-link" href="/articles/create" title="Create article"><span class="fas fa-plus-square"
                        style="font-size: 1.5rem"></span></a>
            </li>
        @endcan

        <li class="nav-item">
            <a class="nav-link" href="{{ route('profile') }}"><span class="fas fa-user"
                    style="font-size: 1.5rem"></span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"><span class="fas fa-sign-out-alt"
                    style="font-size: 1.5rem"></span></a>
        </li>
    @endauth

</ul>
