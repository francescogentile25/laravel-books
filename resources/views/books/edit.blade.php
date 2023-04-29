@extends('layout.app')
@section('content')
    <div class="container">
        <h1>{{ $book->title }}</h1>
        <form action="{{ route('books.update', $book) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    value="{{ old('title', $book->title) }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="copy_number" class="form-label">copy_number</label>
                <input type="number" class="form-control @error('copy_number') is-invalid @enderror" id="copy_number"
                    name="copy_number" value="{{ old('copy_number', $book->copy_number) }}">
                @error('copy_number')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Salva</button>
        </form>
    </div>
@endsection
