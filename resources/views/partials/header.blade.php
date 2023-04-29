<header>
    <ul class="d-flex  nav-link gap-3 justify-content-center fs-4">

        <li>
            <a href="{{ route('books.index') }}">Books</a>
        </li>
        <li>
            <a href="{{ route('books.create') }}">Aggiungi libro</a>
        </li>
    </ul>
</header>
<style>
    a,
    li,
    ul {
        list-style: none;
        text-decoration: none;
        color: currentColor;

    }

    .nav-link {
        text-align: center
    }
</style>
