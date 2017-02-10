<?php

namespace App\Http\Controllers\Wedding;

use App\Models\Charleston;
use App\Http\Controllers\Controller;

class CharlestonController extends Controller
{
    public function index()
    {
        $charleston = Charleston::all();

        return view('app.charleston', ['charleston' => $charleston]);
    }
}
