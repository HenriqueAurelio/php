@extends('admin.layouts.app')

@section('content')
    @component('admin.components.table')
        @slot('titulo', 'Products')
        @can('create', App\Product::class)
            @slot('create',route('products.create'))
        @endcan
        @slot('head')
            <th>Nome</th>
            <th>Price</th>
            <th>Description</th>
            <th>Category</th>
            <th>Opcoes</th>
        @endslot
        @slot('body')
           @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>        
                    <td>{{ $product->price }}</td>        
                    <td>{{ $product->description }}</td>   
                    @foreach($product->categories as $product)     
                        <td>{{ $product->pivot->category_id }}</td>        
                    @endforeach
                    <td class="options">
                        @can('update',$product)
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Editar</a>
                        @endcan
                        @can('delete',$product)
                            <form class="form-delete" action="{{ route('products.destroy', $product->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger"> Deletar</button>
                            </form>
                        @endcan
                    </td>          
                </tr>
           @endforeach
        @endslot
    @endcomponent
@endsection

@push('scripts')
    <script src="{{ asset('js/components/dataTable.js') }}"></script>
    <script src="{{ asset('js/components/sweetAlert.js') }}"></script>
@endpush