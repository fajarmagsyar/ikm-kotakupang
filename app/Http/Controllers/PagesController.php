<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('user.index');
    }
    public function listOpd()
    {
        return view('user.list-opd');
    }
}
