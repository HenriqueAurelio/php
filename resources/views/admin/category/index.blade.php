@extends('admin.layouts.app')

@section('content')
    @component('admin.components.table')
        @slot('titulo', 'Categories')
        @can('create', App\Category::class)
            @slot('create',route('categories.create'))
        @endcan
        @slot('head')
            <th>Nome</th>
            <th>Opcoes</th>
        @endslot
        @slot('body')
           @foreach($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>        
                    <td class="options">
                        @can('update',$category)
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">Editar</a>
                        @endcan
                        @can('delete',$category)
                            <form class="form-delete" action="{{ route('categories.destroy', $category->id) }}" method="post">
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