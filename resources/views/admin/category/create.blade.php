@extends('admin.layouts.app')
@section('content')
    @component('admin.components.create')
        @slot('title', 'Criar category')
        @slot('url',route('categories.store'))
        @slot('form')
            @include('admin.category.form')
        @endslot
    @endcomponent
@endsection
