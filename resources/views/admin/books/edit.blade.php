<div class="container">
    <div class="mb-5">
        <h1>edit Book</h1>
        <div class="row">
            <div class="col-mb-8 offset-md-2">

                 @if ($errors->any())
                    <div class=" m-5 alert alert-danger">
                    <ul>
                    @foreach ( $errors->all() as $error)
                    <li>
                    {{ $error}}
                    </li>

                     @endforeach
                     </ul>
                    </div>

                    @endif



                <form action="{{ route('admin.books.update',$id) }}" method="POST">
                    @csrf
                    @method('patch')

                    <div class="mb-3">
                        <label for="title" class="form-label" >Titolo</label>
                        <input type="text" name="titolo" id="title" class="form-control @error('titolo') is invalid @enderror" value="{{ $book[0]->titolo }}">
                        @error('titolo')
                            <div class="feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="descrizione">descrizione</label>
                        <textarea class="form-control @error('descrizione') is invalid @enderror" name="descrizione" id="descrizione" rows="6">{{ $book[0]->descrizione }}
                        </textarea>
                    </div>

                    <div class="mb-3">

                        <label for="tipo">tipo</label>
                        <input type="text" id="tipo" class="form-control @error('tipo') is invalid @enderror" value={{ $book[0]->tipo }}>

                    </div>

                    <div class="mb-3">

                        <label for="autore">autore</label>
                        <input type="text" id="autore" class="form-control @error('autore') is invalid @enderror" value={{  $book[0]->autore  }} >

                    </div>

                    <button type="submit" class="btn btn-primary">invia</button>

                </form>

            </div>
        </div>
    </div>
</div>
