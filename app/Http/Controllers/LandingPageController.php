<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{

    public function index()
    {
        $data = [
            "title" => "Home",
        ];
        return view('landing-page.index', $data);
    }

}
