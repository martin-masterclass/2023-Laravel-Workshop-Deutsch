<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class FrontendLayout extends Component
{
    /**
     * Create a new component instance.
     */

    public $navigation;

    public function __construct()
    {
        $this->navigation = $this->getNavigationItems();
    }

    public function getNavigationItems($parentId = null) {
        return DB::table('navigation')
            ->where('parent_id', $parentId)
            ->get()
            ->map(function ($item) {
                $item->children = $this->getNavigationItems($item->id);
                return $item;
            });
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
       //dd($this->navigation);
        return view('layouts.frontend');
    }
}
