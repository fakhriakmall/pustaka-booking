<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class FrontEnd extends BaseController
{
    public function frontend()
    {
        return view('frontend');
    }
}
