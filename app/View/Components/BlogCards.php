<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlogCards extends Component
{
    /**
     * Create a new component instance.
     */
    public $sluglink;
    public $id;
    public $name;
    public $updated;
    public $image;

    public function __construct($sluglink, $id, $name, $updated, $image)
    {
        $this->sluglink = $sluglink;
        $this->id = $id;
        $this->name = $name;
        $this->updated = $updated;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.blog-cards');
    }
}
