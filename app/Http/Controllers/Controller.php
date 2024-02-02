<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function index()
    {
        $title = 'Beranda';
        return view('index', compact('title'));
    }
    public function indexAdmin()
    {
        $title = 'Dashboard';
        return view('admin.index', compact('title'));
    }
}
