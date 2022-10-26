<?php

namespace Layers\Controllers;

use Framework\Controller;

class WebSite extends Controller
{
    public function page($name)
    {
        return view($name);
    }
}
