@extends('layout.app')
@section('content')
    <div class=" container grid">
        @foreach ($books as $book)
            <a href="{{ route('books.show', $book) }}">
                <div class="card">
                    <p class="card-text"> {{ $book->title }}</p>
                    <div class="card-body">
                        <p class="card-text"> {{ $book->copy_number }}</p>
                        {{-- <p>{{ $book->genre->title }}</p> --}}
                    </div>
                    <a class="btn btn-primary" href="{{ route('books.edit', $book) }}">Modifica</a>
                    <form action="{{ route('books.destroy', $book) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </form>
                    @foreach ($book->authors as $author)
                        {{ $author->name }}{{ $loop->last ? '' : ', ' }}
                    @endforeach
                </div>

            </a>
        @endforeach
    </div>
@endsection
<style>
    .grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
    }
</style>
