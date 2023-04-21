@extends('layout.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h1 class="text-center">{{ $book->title }}</h1>
                <p class="badge rounded-pill text-bg-primary fs-6">{{ $book->copy_number }}</p>

                <a class="btn btn-danger rounded-pill fs-6" href="{{ route('books.edit', $book) }}">Modifica</a>

            </div>
        </div>

    </div>
@endsection
