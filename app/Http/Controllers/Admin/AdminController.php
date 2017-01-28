<?php

namespace App\Http\Controllers\Admin;

use App\Models\Charleston;
use App\Models\WeddingParty;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.admin');
    }
}