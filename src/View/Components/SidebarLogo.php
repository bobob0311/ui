<?php

namespace Jiny\UI\View\Components;

use Illuminate\View\Component;

class SidebarLogo extends Component
{

    public function __construct()
    {
    }


    public function render()
    {   
        return view('jinyui::components.sidebar.logo');    
    }
}
