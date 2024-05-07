<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProjectDetailForm extends Component
{
    
    public $enquiry_type;  
    public $project_name;
    public $actual_link;

    public function __construct($enquiry_type, $project_name, $actual_link)
    {
        $this->enquiry_type = $enquiry_type;
        $this->project_name = $project_name;
        $this->actual_link = $actual_link;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.project-detail-form');
    }
}
