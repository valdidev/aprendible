{{-- WITH TEMPLATE INHERITANCE --}}
{{-- @extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1>home</h1>
@endsection
 --}}

{{-- WITH COMPONENTS --}}
{{-- 2 ways --}}
{{-- 1 --}}
{{-- @component('components.layout')
    <h1>HOME</h1>
@endcomponent --}}
{{-- 2 --}}
<x-layouts.app
    title="HOME" 
    meta-description="meta custom desc"
    {{-- sum="2 + 2" --}}
    {{-- :sum="2 + 2" --}}
>

    {{-- <x-slot name="title">
        Home title
    </x-slot> --}}

    <x-layouts.nav />

    <h1>HOME</h1>

</x-layouts.app>
