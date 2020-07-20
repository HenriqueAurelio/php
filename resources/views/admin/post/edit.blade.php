@extends('admin.layouts.app')
@section('content')
    @component('admin.components.edit')
        @slot('title', 'Editar Post')
        @slot('url',route('posts.update', $post->id))
        @slot('form')
            @include('admin.post.form')
        @endslot
    @endcomponent
@endsection
