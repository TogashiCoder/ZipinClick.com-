<?php

namespace App\View\Components\Frontend;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Str;

class InputEmail extends Component
{


    public string $name;
    public string $label;
    public ?string $value;
    public ?string $placeholder;



    /**
     * Create a new component instance.
     */
    public function __construct( string $name,string $label =null,string $value = null,string $placeholder = null)
    {
        $this->name = $name;
        $this->label = $label ?? Str::title(str_replace('_', ' ', $name));
        $this->placeholder = $placeholder;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.frontend.input-email');
    }
}
