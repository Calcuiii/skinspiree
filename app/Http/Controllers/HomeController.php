<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Home view for admin
    public function index()
    {
        $pageTitle = 'Dashboard Skinspire';
        return view('dashboard', ['pageTitle' => $pageTitle]);
    }
}
