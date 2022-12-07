{{-- @extends('layouts.app')

@section('title', 'About')

@section('content')
    <h1>about</h1>
@endsection
 --}}

 <x-layouts.app
    title="ABOUT" 
    meta-description="meta custom desc"
    {{-- sum="2 + 2" --}}
    {{-- :sum="2 + 2" --}}
>

    {{-- <x-slot name="title">
        Home title
    </x-slot> --}}

    <x-layouts.nav />

    <h1>ABOUT</h1>

</x-layouts.app>