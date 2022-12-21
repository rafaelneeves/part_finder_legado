@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 text-center">
                <h1 class="heading" data-aos="fade-up">
                    Localizador de Peças
                </h1>
                <form>
                    <form method="POST" action="{{route('index')}}">
                        @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control" id="id_seach">
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary" type="button">Buscar</button>
                    </div>
                    @foreach ($part_list as $parts)
                        <p>Peça: {{ $parts->name }}</p>
                    @endforeach
                </form>
            </div>
        </div>
    </div>
@endsection
