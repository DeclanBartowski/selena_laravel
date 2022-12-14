<?php

namespace App\View\Components;

use App\Models\Cabinet;
use Illuminate\View\Component;

class MyOfficeLayout extends Component
{
    public $page;

    /**
     * Create a new component instance.
     * @param $page
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
        $data = Cabinet::first();

        return view(sprintf('components.%s.my-office', $this->page), compact('data'));
    }
}
