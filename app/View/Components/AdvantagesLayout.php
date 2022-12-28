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
        $advantages = Advantage::where('active', true)
            ->orderBy('sort', 'asc')
            ->get()
            ->toArray();

        if ($advantages) {
            $cnt = $globalCnt = 1;
            $wrapClass = [
                1 => '',
                2 => '',
                3 => 'item-third',
                4 => 'text-right',
            ];
            $subWrapClass = [
                1 => 'desc-right desc-second',
                2 => '',
                3 => 'desc-three',
                4 => 'desc-right',
            ];

            foreach ($advantages as $key => &$arItem) {
                if ($cnt === 5) {
                    $cnt = 1;
                }
                $arItem['wrap_class'] = $wrapClass[$cnt];
                $arItem['sub_wrap_class'] = $subWrapClass[$cnt];
                $arItem['item_number'] = $globalCnt < 10 ? '0' . $globalCnt : $globalCnt;
                $globalCnt++;
                $cnt++;
            }
            $advantages = array_chunk($advantages, 2);
        }

        return view(sprintf('components.%s.advantages', $this->page), compact('advantages'));
    }
}
