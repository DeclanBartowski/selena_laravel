<?php

namespace App\View\Components;

use App\Models\TextBlock;
use Illuminate\View\Component;

class TextBlockLayout extends Component
{

    public $code;

    /**
     * Create a new component instance.
     *
     * @param $code
     *
     * @return void
     */
    public function __construct($code)
    {
        $this->code = $code;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $page = TextBlock::where('code', $this->code)
                ->where('active', true)
                ->first();

        return view('components.text-block-layout', compact('page'));
    }
}
