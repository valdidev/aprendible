<x-layouts.app :title="$post->title" :meta-description="$post->body">

    <x-layouts.nav />

    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
    <a href="/blog">Regresar</a>
</x-layouts.app>
