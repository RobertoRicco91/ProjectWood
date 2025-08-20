<form class="formCreaArticolo" wire:submit="store">
    @if (session()->has('success'))
        <div class="alert alert-success text-center">{{ session('success') }}"></div>
    @endif
    <div class="mb-3">
        <label for="titleArticle" class="form-label">Titolo</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="titleArticle" wire:model.blur="title">
        @error('title')
            <span>{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="bodyArticle" class="form-label">Descrizone</label>
        <textarea class="form-control @error('body') is-invalid @enderror" id="bodyArticle" rows="3" wire:model.blur="body"></textarea>
        @error('body')
            <span>{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="priceArticle" class="form-label">Prezzo</label>
        <input type="number" class="form-control @error('price') is-invalid @enderror" id="priceArticle" wire:model.blur="price">
        @error('price')
            <span>{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <select id="category" wire:model.blur="category" class="form-control @error('category') is-invalid @enderror">
            <option label disabled>Seleziona una categoria</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        @error('category')
            <span>{{ $message }}</span>
        @enderror
    </div>
    <button type="submit" class="btnCreaArticolo">Crea</button>
</form>
