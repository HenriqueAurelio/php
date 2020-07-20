@extends('admin.layouts.app')
@section('content')
    @component('admin.components.edit')
        @slot('title', 'Editar Category')
        @slot('url',route('categories.update', $category->id))
        @slot('form')
            @include('admin.category.form')
        @endslot
    @endcomponent
@endsection
