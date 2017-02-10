<?php

namespace App\Http\Controllers\Admin;

use App\Models\Charleston;
use App\Models\WeddingParty;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

    public function about(Request $request)
    {
        $about = json_decode($request->about);

        $bio = '';

        foreach($about as $content) {
            foreach($content as $k => $v) {
                $bio = $k->insert;
            }
        }


    }
}