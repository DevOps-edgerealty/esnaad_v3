<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ConstructionCard extends Component
{
    public $id;
    public $title;
    public $titlear;
    public $sluglink;  
    public $thumbnail;

    public function __construct($id, $title, $titlear, $sluglink, $thumbnail)
    {
        $this->$id = $id;
        $this->$title = $title;
        $this->$titlear = $titlear;
        $this->$sluglink = $sluglink;
        $this->$thumbnail = $thumbnail;
    }

    public function render(): View|Closure|string
    {
        return view('components.construction-card');
    }
}