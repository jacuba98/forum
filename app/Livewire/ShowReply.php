<?php

namespace App\Livewire;

use App\MOdels\Reply;
use Livewire\Component;

class ShowReply extends Component
{
    public Reply $reply;

    public function render()
    {
        return view('livewire.show-reply');
    }
}
