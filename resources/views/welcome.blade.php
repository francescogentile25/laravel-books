@extends('layout.app')
@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    @forelse ($books as $book)
                        <ul class="list-group m-3">
                            <li class="list-group-item fs-3">{{ $book->title }}</li>
                            <li class="list-group-item"> Numero copie: {{ $book->copy_number }}</li>
                        </ul>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </main>
@endsection
