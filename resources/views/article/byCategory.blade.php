<x-layout>
    <section class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="display-5 fw-bold m-5 text-center">Articoli della categoria: {{ $category->name }}</h1>
            </div>
        </div>
        <article class="row">
            @forelse ($articles as $article)
                <div class="col-12 col-md-6 mb-5">
                    <x-card :article="$article" />
                </div>
            @empty
                <div class="col-12">
                    <h4 class="fw-bold lh-1 mb-3 text-center">Non ci sono articoli per queste categoria</h4>
                    @auth
                    <div class="d-flex justify-content-center mt-5">
                        <a href="{{route('create.article')}}" class="btn btn-primary">Crea articolo</a>
                    </div>
                    @endauth
                </div>
            @endforelse
        </article>
    </section>
</x-layout>
