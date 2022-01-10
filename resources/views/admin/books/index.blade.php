@extends('layouts.app')


@section('content')
<ul>
    @foreach ($books as $book )

                <li>

                    {{ $book->titolo}}

                </li>

    @endforeach
</ul>

@endsection
