<nav>
    <ul>
        {{-- <li><a href="/home">Home</a></li> --}}
        {{-- calling route named as contact --}}
        {{-- allows us to change route --}}
        {{-- with php in row --}}
        {{-- <li><a href="<?= //route('home') ?>">Home</a></li> --}}
        {{-- with blade template engine --}}
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('blog') }}">Blog</a></li>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
    </ul>
</nav>