<x-layout>
    <header class="container col-xxl-8 px-4 py-5 titleHero">
        <section class="row">
            <div class="col-12">
                <h1 class="display-5 fw-bold mb-5 text-center">Pagina Revisore</h1>
            </div>
        </section>
        @if (session()->has('message'))
            <div class="row justify-content-center">
                <div class="col-5 alert-success alert text-center">
                    {{session('message')}}
                </div>
            </div>
        @endif
        <!-- articoli da revisionare -->
         @if ($article_to_check)
            @if ($article_to_check->images->count() > 0)
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($article_to_check->images as $key=>$image)
                            <div class="carousel-item active @if($loop->first) active @endif">
                                <img src="{{ $image->getUrl(300, 300) }}" class="img-fluid w-100" alt="Immagine {{$key +1}} dell'articolo {{$article_to_check->title}}">
                            </div>
                        @endforeach
                    </div>
                    @if ($article_to_check->images->count() > 1)
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    @endif
                </div>
            @else
                @for ($i = 0; $i < 6; $i++)
                    <div class="col-6 col-md-4 text-center">
                                <img src="https://picsum.photos/400" alt="foto segnaposto" class ="img-fluid">
                    </div>
                @endfor
            @endif
             <section class="row">
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
