

@include('partials.header')
    <body>
        @include('partials.bar')
    @foreach ($books as $book)
        {{ $book->titolo }}
    @endforeach

    </body>

@include('partials.footer')
