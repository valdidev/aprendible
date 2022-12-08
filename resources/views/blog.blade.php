{{-- @extends('layouts.app')

@section('title', 'Blog')

@section('content')
    <h1>blog</h1>
@endsection
 --}}

<x-layouts.app title="BLOG" meta-description="meta custom desc" {{-- sum="2 + 2" --}} {{-- :sum="2 + 2" --}}>

    {{-- <x-slot name="title">
     Home title
 </x-slot> --}}

    <x-layouts.nav />

    <h1>BLOG</h1>
    {{-- @dump($posts) --}}
    {{-- @foreach ($posts as $post)
        <h2>{{ $post['title'] }}</h2>
    @endforeach --}}
    {{-- @foreach ($posts as $post)
        <h1>{{ $post->title }}</h1>
    @endforeach --}}
    
    @foreach ($posts as $post)
        <h1><a href="/blog/{{ $post->id }}">{{ $post->title }}</a></h1>
    @endforeach

</x-layouts.app>
