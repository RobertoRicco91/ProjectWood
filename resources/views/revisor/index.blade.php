<x-layout>
    <header class="container col-xxl-8 px-4 py-5 titleHero">
        <section class="row">
            <div class="col-12">
                <h1 class="display-5 fw-bold mb-5 text-center">Pagina Revisore</h1>
            </div>
        </section>
        @if (session()->has('message'))
            <div class="row">
                <div class="col-5 alert-success alert text-center">
                    {{session('message')}}
                </div>
            </div>
        @endif
        <!-- articoli da revisionare -->
         @if ($article_to_check)
             <section class="row">
                <div class="col-6">
                    <div class="row">
                        @for ($i = 0; $i < 3; $i++)
                            <div class="col-6">
                                <img src="https://picsum.photos/400" alt="foto segnaposto" class ="img-fluid">
                            </div>
                        @endfor
                    </div>
                </div>
                <div class="col-md-4 d-flex flex-column justify-content-between">
                    <div>
                        <h4>{{$article_to_check->title}}</h4>
                        <p>{{$article_to_check->body}}</p>
                        <p>Prezzo: {{$article_to_check->price}}</p>
                        <p>Autore: {{$article_to_check->user->name}}</p>
                        <p>Categoria: {{$article_to_check->category->name}}</p>
                        <p>Creato: {{$article_to_check->created_at}}</p>
                    </div>
                    <div class="d-flex justify-content-around">
                        <form action="{{route('accept', ['article' => $article_to_check])}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-success">Accetta</button>
                        </form>
                        <form action="{{route('reject', ['article' => $article_to_check])}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-warning">Rifiuta</button>
                        </form>
                    </div>
                </div>
             </section>
         @else
         <div class="row m-5">
            <div class="col-12">
                <h4 class="display-5 fw-bold mb-3 text-center">Non ci sono articoli da revisionare</h4>
                <div class="d-flex justify-content-center m-5">
                    <a href="{{route('homepage')}}" class="btn btn-primary">Torna all'homepage</a>
                </div>
            </div>
         </div>
         @endif
    </header>
</x-layout>
