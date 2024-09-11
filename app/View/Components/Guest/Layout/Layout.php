<?php

namespace App\View\Components\Guest\Layout;

use App\Models\Ceo\Setting;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Layout extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;
    public $setting;
    public function __construct($title)
    {
        $this->title = $title;
        $this->setting = Setting::query()->first();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.guest.layout.layout');
    }
}
