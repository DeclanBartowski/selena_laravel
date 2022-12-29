<?php

namespace App\View\Components;

use App\Models\Social;
use Illuminate\View\Component;

class SocialsList extends Component
{
    public $class;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($class)
    {
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $socials = Social::where('active', true)
            ->orderBy('sort', 'asc')
            ->get();
        $class = $this->class;
        return view('components.socials-list', compact('socials', 'class'));
    }
}
