@extends('admin.layouts.app')

@section('content')
    @component('admin.components.table')
        @slot('titulo', 'Posts')
        @can('create', App\Post::class)
            @slot('create',route('posts.create'))
        @endcan
        @slot('head')
            <th>Nome</th>
            <th>Autor</th>
            <th>Texto</th>
            <th>Opcoes</th>
        @endslot
        @slot('body')
           @foreach($posts as $post)
                <tr>
                    <td>{{ $post->nome }}</td>        
                    <td>{{ $post->autor }}</td>        
                    <td>{{ $post->texto }}</td>        
                    <td class="options">
                        @can('update',$post)
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Editar</a>
                        @endcan
                        @can('delete',$post)
                            <form class="form-delete" action="{{ route('posts.destroy', $post->id) }}" method="post">
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