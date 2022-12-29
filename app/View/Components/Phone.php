<?php

namespace App\View\Components;

use App\Models\Setting;
use Illuminate\View\Component;

class Phone extends Component
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
        $class = $this->class;

        $phones = Setting::whereIn('code', ['phone_read', 'phone_call'])->get();
        foreach ($phones as $item) {
            $phone[$item->code] = $item->value;
        }

        return view('components.phone', compact('phone', 'class'));
    }
}
