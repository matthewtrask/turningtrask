<?php

namespace App\Http\Controllers\Wedding;

use App\Models\About;
use App\Http\Controllers\Controller;

class WeddingController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $about = About::all();

        return view('app.home', ['about' => $about]);
    }
}
