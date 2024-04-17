<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Page extends BaseController
{
    public function index():string
    {
        return view('page/beranda');
    }
    public function timeline():string
    {
        return view('page/timeline');
    }
}
