<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $field;
    public $type;
    public $text;
    public $required;
    public $current;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($field, $text, $type = "text", $required = false, $current = "")
    {
        $this->type = $type;
        $this->field = $field;
        $this->text = $text;
        $this->required = $required;
        $this->current = $current;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
