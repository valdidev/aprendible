{{-- @extends('layouts.app')

@section('title', 'Blog')

@section('content')
    <h1>blog</h1>
@endsection
 --}}

 <x-layouts.app
 title="BLOG" 
 meta-description="meta custom desc"
 {{-- sum="2 + 2" --}}
 {{-- :sum="2 + 2" --}}
>

 {{-- <x-slot name="title">
     Home title
 </x-slot> --}}

 <x-layouts.nav />

 <h1>BLOG</h1>

</x-layouts.app>