<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('compiledAgriculturePanelData');
    }

    public function showKrishiJomi()
    {
        return view('compiledList');
    }

    public function showBoroChashi()
    {
        return view('compiledBoroChashi');
    }

    public function showBorgaChashi()
    {
        return view('compiledBorgaChashi');
    }

    public function showChotoChashi()
    {
        return view('compiledChotoChashi');
    }

    public function showMap()
    {
        return view('hitMap');
    }
    public function showFloodVuln()
    {
        return view('floodWeb/public/floodRelatedPanelData');
    }
    public function showAgriVuln()
    {
        return view('compiledAgriVuln');
    }
    public function showUsageSummary()
    {
        return view('compiledFertilizer');
    }
    public function sanitationSystem()
    {
        return view('sanitationSystem');
    }
    public function showSanitationData()
    {
        return view('showSanitationData');
    }

}
