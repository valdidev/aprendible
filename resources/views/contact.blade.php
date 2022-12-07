{{-- @extends('layouts.app')
    
@section('title', 'Contact')

@section('meta-description', 'this is a contact meta description')

@section('content')
    <h1>contact</h1>
@endsection --}}

<x-layouts.app
    title="CONTACT" 
    meta-description="meta custom desc"
    {{-- sum="2 + 2" --}}
    {{-- :sum="2 + 2" --}}
>

    {{-- <x-slot name="title">
        Home title
    </x-slot> --}}

    <x-layouts.nav />

    <h1>Contact</h1>

</x-layouts.app>