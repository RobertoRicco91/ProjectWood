<x-layout>
    <header class="container col-xxl-8 px-4 py-5 titleHero">
        @if (session()->has('message'))
            <div class="alert alert-danger text-center">
                {{session('message')}}
            </div>
        @endif
        @if (session()->has('message'))
            <div class="alert alert-success text-center">
                {{session('message')}}
            </div>
        @endif
        <!-- sezione con buttons -->
        <section class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-12 col-sm-8 col-lg-6">
                <img src="https://picsum.photos/700/500" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Project Wood</h1>
                <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="{{ route('index.article') }}" type="button" class="btn btn-outline-secondary btn-lg px-4">Collezione</a>
                    @auth
                    <a href="{{ route('create.article') }}" type="button" class="btn btn-outline-secondary btn-lg px-4">Crea</a>
                    @endauth
                    @guest
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4">Accedi</button>
                    @endguest
                </div>
            </div>
        </section>
        <section class="row justify-content-around mb-5 mt-5">
            <div class="col-12">
                <h2 class="display-5 fw-bold lh-1 my-3 mb-5 text-center">Nuovi Articoli</h2>
            </div>
            @forelse ($articles as $article)
            <div class="col-12 col-md-3">
                <x-card :article="$article" />
            </div>
            @empty
            <div class="col-12">
                <h4 class="display-5 fw-bold lh-1 mb-3 text-center">Non ci sono articoli</h4>
            </div>
            @endforelse
        </section>
    </header>
</x-layout>
