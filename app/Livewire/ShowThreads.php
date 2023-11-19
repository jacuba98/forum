<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Thread;

class ShowThreads extends Component
{
    public $search = '';

    public function render()
    {
        $categories = Category::get();

        $threads = Thread::query();
        $threads->where('title', 'like', "%$this->search%");
        $threads->withCount('replies');
        $threads->latest();
        return view('livewire.show-threads', [
            'categories' => $categories,
            'threads' => $threads->get()
        ]);
    }
}
