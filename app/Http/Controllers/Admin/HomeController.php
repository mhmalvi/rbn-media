<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Home funciton
     */
    public function index()
    {
        return view('admin.index');
    }
}
