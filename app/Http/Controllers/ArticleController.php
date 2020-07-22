<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('compiledAgriculturePanelData');
    }

    public function krishiJomi()
    {
        return view('compiledList');
    }
}
