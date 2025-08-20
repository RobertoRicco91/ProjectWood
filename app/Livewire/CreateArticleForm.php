<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class CreateArticleForm extends Component
{
    #[Validate('required|min:3')]
    public $title;
    #[Validate('required|min:9')]
    public $body;
    #[Validate('required|numeric|min:0')]
    public $price;
    #[Validate('required')]
    public $category;
    public $article;

    public function store() {
        $this->validate();
        $this->article = Article::create([
            'title' => $this->title,
            'body' => $this->body,
            'price' => $this->price,
            'category_id' => $this->category,
            'user_id' => Auth::id(),
        ]);
        $this->reset();
        session()->flash('success', 'Articolo creato con successo');
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
