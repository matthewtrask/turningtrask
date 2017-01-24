<?php

namespace App\Http\Controllers\Wedding;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CharlestonController extends Controller
{
    public function index()
    {
        return view('app.charleston');
    }
}
