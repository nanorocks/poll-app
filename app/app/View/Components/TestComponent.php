<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TestComponent extends Component
{

    
    public string $background;

    public string $link;

    public string $btnName;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $background, string $link, string $btnName)
    {
        $this->background = $background;
        $this->link = $link;
        $this->btnName = $btnName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.test-component');
    }
}
