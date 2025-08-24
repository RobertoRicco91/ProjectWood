<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class CreateArticleForm extends Component
{
    use WithFileUploads;

    #[Validate('required|min:3')]
    public $title;
    #[Validate('required|min:9')]
    public $body;
    #[Validate('required|numeric|min:0')]
    public $price;
    #[Validate('required')]
    public $category;
    public $article;
    public $images=[];
    public $temporary_images;

    public function store() {
        $this->validate();
        $this->article = Article::create([
            'title' => $this->title,
            'body' => $this->body,
            'price' => $this->price,
            'category_id' => $this->category,
            'user_id' => Auth::id(),
        ]);
        if(count($this->images) > 0) {
            foreach($this->images as $image) {
                $this->article->images()->create([
                    'path' => $image->store('images', 'public'),
                ]);
            }
        }
        $this->reset();
        session()->flash('success', 'Articolo creato con successo');
    }

    public function updatedTemporaryImages(){
        if($this->validate([
            'temporary_images.*' => 'image|mimes:jpg,jpeg,png|max:2048',
            'images' => 'max:6',
        ])) {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }

    public function removeImage($key) {
        if (in_array($key, array_keys($this->image))) {
            unset($this->image[$key]);
        }
    }

    public function messages() {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'body.required' => 'La descrizione è obbligatoria',
            'price.required' => 'Il prezzo è obbligatorio',
            'category.required' => 'La categoria è obbligatoria',
        ];
    }
    public function render()
    {
        return view('livewire.create-article-form');
    }
}
