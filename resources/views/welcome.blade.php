@extends('layouts.app')

@section('title', 'Page Title')

<h1 class="text-3xl font-bold underline">Title</h1>

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection
