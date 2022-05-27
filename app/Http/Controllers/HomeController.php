<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
// use Illuminate\Foundation\Bus\DispatchesJobs;
// use Illuminate\Foundation\Validation\ValidatesRequests;
// use Illuminate\Routing\Controller as BaseController;
class HomeController extends Controller
{
    // 
    public function index()
    {
        return view('layout/home', [
            'welcome' => 'Administrator',
            'name' => 'Mokiproxy'

        ]);
    }
}
