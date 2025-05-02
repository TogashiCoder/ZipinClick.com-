<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Str;

class InputTextarea extends Component
{
    public string $name;
    public string $label = null;
    public string $value = null;
    public string $placeholder = null;



    public function __construct( string $name,string $label =null,$value = null,$placeholder)
    {
        $this->name = $name;
        $this->label = $label ?? Str::title(str_replace('_', ' ', $name));
        $this->value = old($name,$value);
        $this->placeholder = $placeholder;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.input-textarea');
    }
}
