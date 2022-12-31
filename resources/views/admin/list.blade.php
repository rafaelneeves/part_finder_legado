@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 text-center">
                
                <form method="GET" action="{{ route('index') }}">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="id_seach" name="search">
                    </div>
                    <a class="btn btn-success" href="{{ route('new') }}" role="button">Nova Peça</a>
                    <button class="btn btn-primary" type="submit">Buscar</button>
                    @if (!empty($part_list))
                        <div class="container mt-5">
                            <table class="table table-bordered mb-5">
                                <thead>
                                    <tr class="table-success">
                                        <th scope="col">Ação</th>
                                        <th scope="col">Código da Peça</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Quantidade</th>
                                        <th scope="col">Preço</th>
                                        <th scope="col">Atualizado Em</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($part_list as $parts)
                                        <tr>
                                            <td>X</td>
                                            <td>{{ $parts->number_part }}</td>
                                            <td>{{ $parts->name }}</td>
                                            <td>{{ $parts->amount }}</td>
                                            <td>{{ $parts->price }}</td>
                                            <td>{{date_format($parts->updated_at,"d/m/Y H:i:s")}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- {{ $part_list->appends([
                                    'search' => request()->get('search', ''),
                                ])->links() }} --}}
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
@endsection
