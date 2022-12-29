<?php

namespace App\Http\Controllers;

use App\Models\Page;

class TextPageController extends Controller
{
    public function __invoke(Page $page)
    {
        return view('pages.text-page', compact('page'));
    }
}
