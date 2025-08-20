<x-layout>
    <section class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="display-5 fw-bold m-5 text-center">{{$article->title}}</h1>
            </div>
        </div>
        <article class="row justify-content-center">
            <div class="col-12">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/400" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/400" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/400" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-12 mb-5 mt-5">
                <div class="text-center">
                    <p class="fw-bold">Descrizione:</p>
                    <p class="">{{$article->body}}</p>
                    <p class="fw-bold">Prezzo:</p>
                    <p class="">{{$article->price}}</p>
                    <p class="fw-bold">Categoria:</p>
                    <a href="">{{$article->category->name}}</a>
                </div>
            </div>
        </article>
    </section>
</x-layout>
