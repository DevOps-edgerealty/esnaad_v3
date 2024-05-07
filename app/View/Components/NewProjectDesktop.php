<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NewProjectDesktop extends Component
{
     public $id;
     public $name;
     public $namear;
     public $community;
     public $communityar;
     public $slug;
     public $thumbnail;
     public $logo;
     public $header;

    public function __construct($id, $name, $namear, $community, $communityar, $slug, $thumbnail, $logo, $header)
    {        
        $this->id = $id;
        $this->name = $name;
        $this->namear = $namear;
        $this->community = $community;
        $this->communityar = $communityar;
        $this->slug = $slug;
        $this->thumbnail = $thumbnail;
        $this->logo = $logo;
        $this->header = $header;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.new-project-desktop');
    }
}
