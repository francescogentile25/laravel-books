@extends('layout.app')
@section('content')
    <div class="container">
        <form action="{{ route('books.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input genre="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="copy_number" class="form-label">Numero Copie</label>
                <input genre="number" id="copy_number"
                    class="form-control @error('copy_number') is-invalid @enderror"name="copy_number">{{ old('copy_number') }}</input>
                @error('copy_number')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="genre-id" class="form-label">Genere</label>
                <select class="form-select @error('genre_id') is-invalid @enderror" id="genre-id" name="genre_id"
                    aria-label="Default select example">
                    <option value="" selected>Seleziona genere</option>
                    @foreach ($genres as $genre)
                        <option @selected(old('genre_id') == $genre->id) value="{{ $genre->id }}">{{ $genre->title }}</option>
                    @endforeach
                </select>
                @error('genre_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Aggiungi</button>
        </form>


    </div>
@endsection
