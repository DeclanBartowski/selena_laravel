<?php

namespace App\View\Components;

use App\Models\Advantage;
use Illuminate\View\Component;

class AdvantagesLayout extends Component
{
    public $page;

    /**
     * Create a new component instance.
     *
     * @return void
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
        $advantages = Advantage::where('active', true)
            ->orderBy('sort', 'asc')
            ->get()
            ->toArray();

        return view('components.advantages-layout', compact('page', 'advantages'));
    }
}
