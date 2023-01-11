<?php

namespace App\Controller;

use Sciola\Controller;

class WebSite extends Controller
{
    public function page($name)
    {
        return view($name);
    }
}
