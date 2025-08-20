<x-layout>
    <section class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="display-5 fw-bold m-5 text-center">Tutti gli Articoli</h1>
            </div>
        </div>
        <article class="row">
            @forelse ($articles as $article)
                <div class="col-6 col-md-6 mb-5">
                    <x-card :article="$article" />
                </div>
            @empty
                <div class="col-12">
                    <h4 class="display-5 fw-bold lh-1 mb-3 text-center">Non ci sono articoli</h4>
                </div>
            @endforelse
        </article>
    </section>
    <div class="d-flex justify-content-center">
        <div>
            {{ $articles->links() }}
        </div>
    </div>
</x-layout>
