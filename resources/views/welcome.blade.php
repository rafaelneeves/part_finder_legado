@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 text-center">
                <h1 class="heading" data-aos="fade-up">
                    Localizador de Peças
                </h1>
                <form method="GET" action="{{ route('index') }}">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="id_seach" name="search">
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary" type="submit">Buscar</button>
                    </div>
                    @if (!empty($part_list))
                        <div class="container mt-5">
                            <table class="table table-bordered mb-5">
                                <thead>
                                    <tr class="table-success">
                                        <th scope="col">#</th>
                                        <th scope="col">First name</th>
                                        <th scope="col">Last name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($part_list as $parts)
                                        <tr>
                                            <th scope="row">{{ $parts->id }}</th>
                                            <td>{{ $parts->number_part }}</td>
                                            <td>{{ $parts->name }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $part_list->appends([
                                'search' => request()->get('search', '')
                            ])->links() }}
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
@endsection
