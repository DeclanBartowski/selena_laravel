<?php

namespace App\View\Components;

use App\Models\Service;
use Illuminate\View\Component;

class ServicesLayout extends Component
{

    public $page;

    /**
     * Create a new component instance.
     *
     * @param $page
     */
    public function __construct($page)
    {
        $this->page = $page;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $page = $this->page;
        $services = Service::where('active', true)->orderBy('sort', 'asc')->get();
        return view('components.services-layout', compact('services', 'page'));
    }
}
