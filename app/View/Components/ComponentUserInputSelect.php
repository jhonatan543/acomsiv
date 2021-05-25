<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ComponentUserInputSelect extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $name;
    public $options;
    public $label;

    public function __construct(string $name, array $options, string $label)
    {
        $this->name = $name;
        $this->options = $options;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.component-user-input-select');
    }
}
