<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Str;



class InputText extends Component
{

     public ?string $type;
     public string $name;
     public string $label;
     public ?string $value;
     public ?string $placeholder;


    /**
     * Create a new component instance.
     */

    public function __construct(string $name, string $label = null, string $value = null, string $placeholder = null, string $type = null)

    {
        $this->name = $name;
        $this->label = $label ?? Str::title(str_replace('_', ' ', $name));
        $this->placeholder = $placeholder;
        $this->value = old($name,$value);
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.input-text');
    }
}
