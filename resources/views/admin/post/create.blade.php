@extends('admin.layouts.app')
@section('content')
    @component('admin.components.create')
        @slot('title', 'Criar post')
        @slot('url',route('posts.store'))
        @slot('form')
            @include('admin.post.form')
        @endslot
    @endcomponent
@endsection
