<div class="card mx-auto shadow mb-3 text-end" style="width: 18rem;">
  <div class="card-body">
    <img src="https://picsum.photos/700/499" class="card-img-top" alt="{{ $article->title }}">
    <h5 class="card-title">{{ $article->title }}</h5>
    <p class="card-text">Prezzo: {{$article->price}}€</p>
    <div class="d-flex flex-column">
        <a href="{{route('byCategory', ['category' => $article->category])}}" class="mb-3">{{ $article->category->name }}</a>
        <a href="{{route('show.article', compact('article'))}}" class="btn btn-primary">Dettaglio</a>
    </div>
  </div>
</div>
