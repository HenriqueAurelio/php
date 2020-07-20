@extends('admin.layouts.app')
@section('content')
    @component('admin.components.edit')
        @slot('title', 'Editar Produto')
        @slot('url',route('products.store'))
        @slot('form')
            @include('admin.product.form')
        @endslot
    @endcomponent
@endsection
