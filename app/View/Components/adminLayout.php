<?php

namespace App\View\Components;

use Illuminate\View\Component;

class adminLayout extends Component
{
    public $title;
    public function __construct($title = null)
    {
        $this->title = $title ?? 'DOT';
    }

    public function render()
    {
        return view('template.index');
    }
}