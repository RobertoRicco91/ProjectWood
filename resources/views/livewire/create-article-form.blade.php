<form class="formCreaArticolo" wire:submit="store">
    @if (session()->has('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
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
    <div class="mb-3">
        <label for="imageArticle" class="form-label">Inserisci le immagini</label>
        <input type="file" multiple class="form-control @error('temporary_images.*') is-invalid @enderror" id="imageArticle" wire:model.live="temporary_images" placeholder="Img/">
        @error('temporary_images.*')
            <span>{{ $message }}</span>
        @enderror
        @error('temporary_images')
            <span>{{ $message }}</span>
        @enderror
    </div>
    @if (!empty($images))
        <div class="row">
            <div class="col-12">
                <p>photo preview</p>
                <div class="row">
                    @foreach ($images as $key => $image)
                        <div class="col d-flex flex-column align-items-center">
                            <div class="img-preview shadow rounded" style="background-image: url('{{ $image->temporaryUrl() }}');" >
                            </div>
                            <button type="button" class="btn btn-danger" wire:click="removeImage({{ $key }})">X</button>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    <button type="submit" class="btnCreaArticolo">Crea</button>
</form>
