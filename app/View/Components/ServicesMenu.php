<?php

namespace App\View\Components;

use App\Models\Service;
use Illuminate\View\Component;

class ServicesMenu extends Component
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
        $services = Service::where('active', true)
            ->orderBy('sort', 'asc')
            ->get();
        return view('components.services-menu', compact('services'));
    }
}
