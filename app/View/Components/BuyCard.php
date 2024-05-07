<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BuyCard extends Component
{

    public $sluglink;
    public $id;
    public $titleen;
    public $location;
    public $type;
    public $bedrooms;
    public $bathrooms;
    public $img;
    public $category;
    public $price;
    public $area;

    public function __construct(
        $sluglink,
        $id,
        $titleen,
        $location,
        $type,
        $bedrooms,
        $bathrooms,
        $img,
        $category,
        $price,
        $area
    )
    {
        $this->sluglink =   $sluglink;
        $this->id   =   $id;
        $this->titleen  =   $titleen;
        $this->location =   $location;
        $this->type =   $type;
        $this->bedrooms =   $bedrooms;
        $this->bathrooms    =   $bathrooms;
        $this->img  =   $img;
        $this->category =   $category;
        $this->price =   $price;
        $this->area =   $area;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.buy-card');
    }
}
