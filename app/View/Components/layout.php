<?php

namespace App\View\Components;

use App\Models\Dataweb;
use App\Models\User;
use Illuminate\View\Component;

class layout extends Component
{

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {


        return view('components.layout', [
            'judul' => 'Toko Buku',
            'user' => User::all(),
            'web' => collect(Dataweb::all())->first(),
        ]);
    }
}
