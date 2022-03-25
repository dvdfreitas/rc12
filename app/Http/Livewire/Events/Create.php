<?php

namespace App\Http\Livewire\Events;

use App\Models\Event;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $title;
    public $slug;
    public $photo;

    protected $rules = [
        'title' => 'required|min:4',
        'slug' => 'required|unique:events',
        'photo' => 'image|max:1024',
    ];

    public function render()
    {
        return view('livewire.events.create');
    }

    public function create()
    {
        $this->validate();

        $this->photo->store('photos');

        Event::create([
            'title' => $this->title,
            'slug' => $this->slug
        ]);
    }

    public function slugify()
    {
        $this->slug = Str::slug($this->title, '_');
    }
}
